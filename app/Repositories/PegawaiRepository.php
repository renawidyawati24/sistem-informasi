<?php

namespace App\Repositories;

use App\Models\Pegawai;
use App\Repositories\BaseRepository;

/**
 * Class PegawaiRepository
 * @package App\Repositories
 * @version October 27, 2021, 5:59 pm UTC
*/

class PegawaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nip',
        'nama',
        'telepon',
        'alamat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pegawai::class;
    }
}
