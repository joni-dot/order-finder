<?php

namespace Tests\Unit\Actions\CarrierModeOfTransports;

use App\Actions\CarrierModeOfTransports\CreateCarrierModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateCarrierModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that CreateCarrierModeOfTransportAction can create carrier mode of transport.
     *
     * @return void
     */
    public function testThatItCanCreateCarrierModeOfTransport(): void
    {
        (new CreateCarrierModeOfTransport)->execute([
            'name' => 'Example name',
            'price' => 10.00,
            'price_vat' => 12.40,
        ]);

        $this->assertDatabaseCarrierModeOfTransportCount(1);

        $this->assertDatabaseHasCarrierModeOfTransport([
            'id' => 1,
            'name' => 'Example name',
            'price' => 1000,
            'price_vat' => 1240,
        ]);
    }
}
