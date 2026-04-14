<?php

namespace App\Http\Controllers\Admin\Issue;

//return type View
use Illuminate\View\View;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Issue;
use App\Models\Issue_level_publikasi;
use App\Models\Issue_penulis;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Validation\ValidationException;


class IssueController extends Controller
{
    function __construct()
    {
        // $this->middleware(['permission:role-list|role-create|role-edit|role-delete'], ['only' => ['index', 'store']]);
        // $this->middleware(['permission:role-create'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        // $q = $request->get('q');
        $q = $request->q;
        if ($q == null) {
            $q = '';
        }
        // $p = $request->get('perPage');
        $p = $request->perPage;
        if ($p == null) {
            $p = 10;
        }

        // count data for information above table
        $data_count['all_data'] = Issue::get()->count('*');

        if (auth()->user()->hasRole('admin')) {
            $datas = Issue::latest()
                ->where('judul', 'like', '%' . $q . '%')
                ->orWhere('link_publikasi', 'like', '%' . $q . '%')
                ->paginate($p)->withQueryString();
            // dd('admin');
        } else {
            $datas = Issue::latest()
                ->where('user_id', Auth::id())
                ->Where('judul', 'like', '%' . $q . '%')
                // ->orWhere('link_publikasi', 'like', '%' . $q . '%')
                ->paginate($p)->withQueryString();
        }

        foreach ($datas as $kd => $vd) {
            $dt_penulis = Issue_penulis::latest()
                ->where('issue_id', $vd->id)->get();
            $datas[$kd]['penulis_group'] = $dt_penulis;
        }
        // dd($datas);
        return view('admin.issue.index_issue', compact('datas', 'q', 'p', 'data_count'));
    }

    public function create()
    {
        $datas = new Issue;
        $datas_level_publikasi = Issue_level_publikasi::get();
        $form = 'c';
        $route = 'admin.issue.store';
        $breadcrumbs = 'create_new_issue';
        return view('admin.issue.create_issue', compact('route', 'form', 'datas', 'datas_level_publikasi', 'breadcrumbs'));
    }

    public function detail($id)
    {
        return view('admin.issue.detail_issue');
    }

    public function show(): View
    {
        return View('admin.dashboard.dashboard');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($input['bentuk_luaran'] === "1") {
            $this->validate($request, [
                'bentuk_luaran' => 'required',
                'judul' => 'required',
                'jenis_buku' => 'required',
                'isbn_buku' => 'required',
                'penulis_utama' => 'required',
                'penulis.*' => 'required',
                'biaya_apc' => 'required',
                'bukti_pembayaran' => 'required|mimes:pdf',
                'checkbox_confirm' => 'required',
            ], [], [
                'judul' => 'Judul',
            ]);
        } elseif ($input['bentuk_luaran'] === "2"  or $input['bentuk_luaran'] === "3") {
            $this->validate($request, [
                'bentuk_luaran' => 'required',
                'judul' => 'required',
                'jenis_publikasi' => 'required',
                'level_publikasi' => 'required',
                'link_publikasi' => 'required',
                'penulis_utama' => 'required',
                'penulis.*' => 'required',
                'biaya_apc' => 'required',
                'bukti_pembayaran' => 'required|mimes:pdf',
                'checkbox_confirm' => 'required',
            ], [], [
                'judul' => 'Judul',
            ]);
        } elseif ($input['bentuk_luaran'] === "4") {
            $this->validate($request, [
                'bentuk_luaran' => 'required',
                'judul' => 'required',
                'penulis_utama' => 'required',
                'penulis.*' => 'required',
                'biaya_apc' => 'required',
                'jenis_hak_cipta' => 'required',
                'bukti_pembayaran' => 'required|mimes:pdf',
                'checkbox_confirm' => 'required',
            ], [], [
                'judul' => 'Judul',
            ]);
        } else {
            $this->validate($request, [
                'bentuk_luaran' => 'required',
            ], [], [
                'bentuk_luaran' => 'bentuk_luaran',
            ]);
        }

        // simpan image ke storage
        $file = $request->file('bukti_pembayaran');
        $hashedName = $file->hashName(); // Generates the hash
        $path = $file->storeAs('admin/bukti_pembayaran/', $hashedName, 'public');
        if ($path) {
            $input['bukti_pembayaran'] = $hashedName;
        } else {
            $input['bukti_pembayaran'] = "";
        }

        $input['user_id'] = Auth::id();
        // add data to db
        $array = $input;
        unset($array['penulis']);
        unset($array['penulis_utama']);
        // dd($array);
        $data = Issue::create($array);
        if ($data) {

            // INPUT DATA PENULIS KE TABEL PENULIS
            $issue_id = $data->id;
            $input_penulis = $input['penulis'];
            $arr_penulis = [];
            foreach ($input_penulis as $kip => $vip) {

                // CEK SIAPA PENULIS UTAMA
                $arr_penulis[] = [
                    'issue_id' => $issue_id,
                    'penulis_ke' => $kip + 1,
                    'nama' => $vip,
                    'koresponden' => $input['penulis_utama'] = ($kip + 1) ? $kip : 0,
                    'status' => '0'
                ];
            }
            $create_issue_penulis = Issue_penulis::insert($arr_penulis);
            if ($create_issue_penulis) {
                session()->flash('success', 'Data created successfully');
                return response()->json([
                    'success' => true,
                    // 'errors' => true,
                    'data' => $data,
                    'code' => '200',
                    'message' => 'success store data',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'errors' => true,
                    'data' => $arr_penulis,
                    'code' => '200',
                    'message' => 'success store data',
                ]);
            }
        } else {
            return response()->json([
                'success' => true,
                'errors' => true,
                'data' => $data,
                'code' => '500',
                'message' => 'error store data',
            ]);
        }
    }

    public function amir()
    {
        // return view('admin.auth.register');
        return View('welcome');
    }
}
