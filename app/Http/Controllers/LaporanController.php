<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Repositories\LaporanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LaporanController extends AppBaseController
{
    /** @var  LaporanRepository */
    private $laporanRepository;

    public function __construct(LaporanRepository $laporanRepo)
    {
        $this->laporanRepository = $laporanRepo;
    }

    /**
     * Display a listing of the Laporan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $laporans = $this->laporanRepository->all();

        return view('laporans.index')
            ->with('laporans', $laporans);
    }

    /**
     * Show the form for creating a new Laporan.
     *
     * @return Response
     */
    public function create()
    {
        return view('laporans.create');
    }

    /**
     * Store a newly created Laporan in storage.
     *
     * @param CreateLaporanRequest $request
     *
     * @return Response
     */
    public function store(CreateLaporanRequest $request)
    {
        $input = $request->all();

        $laporan = $this->laporanRepository->create($input);

        Flash::success('Laporan saved successfully.');

        return redirect(route('laporans.index'));
    }

    /**
     * Display the specified Laporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        return view('laporans.show')->with('laporan', $laporan);
    }

    /**
     * Show the form for editing the specified Laporan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        return view('laporans.edit')->with('laporan', $laporan);
    }

    /**
     * Update the specified Laporan in storage.
     *
     * @param int $id
     * @param UpdateLaporanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaporanRequest $request)
    {
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        $laporan = $this->laporanRepository->update($request->all(), $id);

        Flash::success('Laporan updated successfully.');

        return redirect(route('laporans.index'));
    }

    /**
     * Remove the specified Laporan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $laporan = $this->laporanRepository->find($id);

        if (empty($laporan)) {
            Flash::error('Laporan not found');

            return redirect(route('laporans.index'));
        }

        $this->laporanRepository->delete($id);

        Flash::success('Laporan deleted successfully.');

        return redirect(route('laporans.index'));
    }
}
