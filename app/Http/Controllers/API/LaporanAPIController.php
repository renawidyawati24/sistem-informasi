<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLaporanAPIRequest;
use App\Http\Requests\API\UpdateLaporanAPIRequest;
use App\Models\Laporan;
use App\Repositories\LaporanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class LaporanController
 * @package App\Http\Controllers\API
 */

class LaporanAPIController extends AppBaseController
{
    /** @var  LaporanRepository */
    private $laporanRepository;

    public function __construct(LaporanRepository $laporanRepo)
    {
        $this->laporanRepository = $laporanRepo;
    }

    /**
     * Display a listing of the Laporan.
     * GET|HEAD /laporans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $laporans = $this->laporanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($laporans->toArray(), 'Laporans retrieved successfully');
    }

    /**
     * Store a newly created Laporan in storage.
     * POST /laporans
     *
     * @param CreateLaporanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLaporanAPIRequest $request)
    {
        $input = $request->all();

        $laporan = $this->laporanRepository->create($input);

        return $this->sendResponse($laporan->toArray(), 'Laporan saved successfully');
    }

    /**
     * Display the specified Laporan.
     * GET|HEAD /laporans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Laporan $laporan */
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        return $this->sendResponse($laporan->toArray(), 'Laporan retrieved successfully');
    }

    /**
     * Update the specified Laporan in storage.
     * PUT/PATCH /laporans/{id}
     *
     * @param int $id
     * @param UpdateLaporanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaporanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Laporan $laporan */
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        $laporan = $this->laporanRepository->update($input, $id);

        return $this->sendResponse($laporan->toArray(), 'Laporan updated successfully');
    }

    /**
     * Remove the specified Laporan from storage.
     * DELETE /laporans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Laporan $laporan */
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            return $this->sendError('Laporan not found');
        }

        $laporan->delete();

        return $this->sendSuccess('Laporan deleted successfully');
    }
}
