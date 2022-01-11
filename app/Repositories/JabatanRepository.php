<?php

namespace App\Repositories;

use App\Models\Jabatan;
use App\Repositories\BaseRepository;

/**
 * Class JabatanRepository
 * @package App\Repositories
 * @version December 27, 2021, 2:54 am UTC
*/

class JabatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pegawai_id',
        'jabatan'
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
        return Jabatan::class;
    }
}
