<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_OPD extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'data_opds';


    protected $fillable = [
        'nama_opd',
        'slug',
        'email',
        'alamat',
        'no_telp',
        'kecamatan',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_opd'
            ]
        ];
    }
}
