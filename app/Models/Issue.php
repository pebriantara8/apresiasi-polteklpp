<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Issue extends Model
{

    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    protected $fillable = [
        'user_id',
        'bentuk_luaran',
        'judul',
        'isbn_buku',
        'jenis_publikasi',
        'level_publikasi',
        'link_publikasi',
        'jenis_hak_cipta',
        'biaya_apc',
        'bukti_pembayaran',
    ];

    // public function sapi()
    // {
    //     return $this->belongsTo(Issue_luaran::class, 'bentuk_luaran', 'id');
    // }

    public function ayam()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function kerbau()
    {
        // return $this->hasOne(Issue_luaran::class, 'id', 'bentuk_luaran');
        return $this->belongsTo(Issue_luaran::class, 'bentuk_luaran', 'id');
    }
}
