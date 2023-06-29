<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded  = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_aplikasi'
            ]
        ];
    }
    protected $casts = [
        'tgl_mulai' => 'datetime',
        'tgl_selesai' => 'datetime',
    ];

    public function R_OPD()
    {
        return $this->belongsTo(Data_OPD::class,'id_opd');
    }

    public function R_Tim()
    {
        return $this->hasMany(Tim::class,'id_aplikasi');
    }
    public function R_pengaduan()
    {
        return $this->hasMany(Pengaduan::class,'id_aplikasi');
    }
    public function R_progres()
    {
        return $this->hasMany(Progres::class,'id_aplikasi');
    }
}
