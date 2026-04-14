<?php

namespace App\Http\Controllers\Admin\Dashboard;

//return type View
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    //     /**
    //  * index
    //  *
    //  * @return View
    //  */
    // public function index() : View {
    //     return View('welcome');
    // }

    public function index()
    {
        // return redirect(('/admin/role'))->withSuccess('Anda telah berhasil masuk!');
        // return redirect()->route('posts')-> withSuccess('Anda telah berhasil masuk!');
        return View('admin.dashboard.home');
    }

    public function show(): View
    {
        return View('admin.dashboard.dashboard');
    }

    public function analytic()
    {
        return View('admin.auth.register');
    }

    public function amir()
    {
        // return view('admin.auth.register');
        return View('welcome');
    }
}
