<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laporan
 * @package App\Models
 * @version December 27, 2021, 6:27 am UTC
 *
 * @property string $nomor
 * @property string $nama
 * @property string $deskripsi
 * @property string $file
 */
class Laporan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'laporans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomor',
        'nama',
        'deskripsi',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomor' => 'string',
        'nama' => 'string',
        'deskripsi' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'file' => 'required'
    ];

    
}
