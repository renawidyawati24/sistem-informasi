<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Jabatan
 * @package App\Models
 * @version December 27, 2021, 2:54 am UTC
 *
 * @property int $pegawai_id
 * @property string $jabatan
 */
class Jabatan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'jabatans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pegawai_id',
        'jabatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jabatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pegawai_id' => 'required',
        'jabatan' => 'required'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai', 'pegawai_id');
    }

    
}
