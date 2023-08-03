<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aduan extends Model
{
    use HasFactory;


    protected $fillable=[
        'judul_aplikasi',
        'cp',
        'deskripsi',
    ];

    public function R_Aplikasi()
    {
        # code...
        return $this->belongsTo(Aplikasi::class, 'judul_aplikasi');
    }
}
