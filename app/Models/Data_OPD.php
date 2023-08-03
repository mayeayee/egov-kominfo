<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data_OPD extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'data_opds';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->kode_opd = strtoupper(static::generateCode($model->nama_opd)) . '-' . str_pad(static::getNextOpdNumber(), 3, '0', STR_PAD_LEFT);
        });
    }

    protected static function generateCode($nama_opd)
    {
        $words = explode(' ', $nama_opd);
        $code = '';

        foreach ($words as $word) {
            $code .= strtoupper(substr($word, 0, 1));
        }

        return $code;
    }

    protected static function getNextOpdNumber()
    {
        $latestOpd = static::latest('id')->first();

        if ($latestOpd) {
            $latestCode = $latestOpd->kode_opd;
            $opdNumber = intval(substr($latestCode, -3));
            return $opdNumber + 1;
        }

        return 1;
    }

    protected $fillable = [
        'nama_opd',
        'slug',
        'email',
        'alamat',
        'no_telp',
        'kecamatan',
        'kode_opd',
        'status'
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
