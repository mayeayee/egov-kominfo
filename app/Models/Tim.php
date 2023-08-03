<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'id_user',
        'id_aplikasi'
    ];

    public function R_User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function R_Aplikasi()
    {
        return $this->belongsTo(Aplikasi::class, 'id_aplikasi');
    }
}
