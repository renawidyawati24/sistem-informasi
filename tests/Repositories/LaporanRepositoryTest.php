<?php namespace Tests\Repositories;

use App\Models\Laporan;
use App\Repositories\LaporanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class LaporanRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var LaporanRepository
     */
    protected $laporanRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->laporanRepo = \App::make(LaporanRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_laporan()
    {
        $laporan = Laporan::factory()->make()->toArray();

        $createdLaporan = $this->laporanRepo->create($laporan);

        $createdLaporan = $createdLaporan->toArray();
        $this->assertArrayHasKey('id', $createdLaporan);
        $this->assertNotNull($createdLaporan['id'], 'Created Laporan must have id specified');
        $this->assertNotNull(Laporan::find($createdLaporan['id']), 'Laporan with given id must be in DB');
        $this->assertModelData($laporan, $createdLaporan);
    }

    /**
     * @test read
     */
    public function test_read_laporan()
    {
        $laporan = Laporan::factory()->create();

        $dbLaporan = $this->laporanRepo->find($laporan->id);

        $dbLaporan = $dbLaporan->toArray();
        $this->assertModelData($laporan->toArray(), $dbLaporan);
    }

    /**
     * @test update
     */
    public function test_update_laporan()
    {
        $laporan = Laporan::factory()->create();
        $fakeLaporan = Laporan::factory()->make()->toArray();

        $updatedLaporan = $this->laporanRepo->update($fakeLaporan, $laporan->id);

        $this->assertModelData($fakeLaporan, $updatedLaporan->toArray());
        $dbLaporan = $this->laporanRepo->find($laporan->id);
        $this->assertModelData($fakeLaporan, $dbLaporan->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_laporan()
    {
        $laporan = Laporan::factory()->create();

        $resp = $this->laporanRepo->delete($laporan->id);

        $this->assertTrue($resp);
        $this->assertNull(Laporan::find($laporan->id), 'Laporan should not exist in DB');
    }
}
