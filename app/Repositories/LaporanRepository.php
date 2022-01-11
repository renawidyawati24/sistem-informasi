<?php

namespace App\Repositories;

use App\Models\Laporan;
use App\Repositories\BaseRepository;

/**
 * Class LaporanRepository
 * @package App\Repositories
 * @version December 27, 2021, 6:27 am UTC
*/

class LaporanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomor',
        'nama',
        'deskripsi',
        'file'
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
        return Laporan::class;
    }
}
