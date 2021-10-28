<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pegawai
 * @package App\Models
 * @version October 27, 2021, 5:59 pm UTC
 *
 * @property string $nip
 * @property string $nama
 * @property string $telepon
 * @property string $alamat
 */
class Pegawai extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pegawais';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nip',
        'nama',
        'telepon',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nip' => 'string',
        'nama' => 'string',
        'telepon' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nip' => 'required',
        'nama' => 'required',
        'telepon' => 'required'
    ];

    
}
