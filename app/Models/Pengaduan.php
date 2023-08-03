<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use HasFactory;


    // use Sluggable;

    protected $guarded  = ['id'];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'nama_pengaduan'
    //         ]
    //     ];
    // }
    public function R_Aplikasi()
    {
        # code...
        return $this->belongsTo(Aplikasi::class, 'id_aplikasi');
    }
    protected $casts=[
        'tgl_mulai'=>'datetime',
        'tgl_selesai'=>'datetime',
    ];
}
