<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Laporan;

class LaporanApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_laporan()
    {
        $laporan = Laporan::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/laporans', $laporan
        );

        $this->assertApiResponse($laporan);
    }

    /**
     * @test
     */
    public function test_read_laporan()
    {
        $laporan = Laporan::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/laporans/'.$laporan->id
        );

        $this->assertApiResponse($laporan->toArray());
    }

    /**
     * @test
     */
    public function test_update_laporan()
    {
        $laporan = Laporan::factory()->create();
        $editedLaporan = Laporan::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/laporans/'.$laporan->id,
            $editedLaporan
        );

        $this->assertApiResponse($editedLaporan);
    }

    /**
     * @test
     */
    public function test_delete_laporan()
    {
        $laporan = Laporan::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/laporans/'.$laporan->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/laporans/'.$laporan->id
        );

        $this->response->assertStatus(404);
    }
}
