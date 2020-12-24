<?php

namespace Tests\Unit\Models;

use App\Models\CarrierModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarrierModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that CreateCarrierAction can create carrier.
     *
     * @return void
     */
    public function testThatIdIsGuarded(): void
    {
        $carrierModeOfTransportData = CarrierModeOfTransport::factory()
            ->make()
            ->toArray();

        CarrierModeOfTransport::create(array_merge($carrierModeOfTransportData, [
            'id' => 123,
        ]));

        $this->assertDatabaseCarrierModeOfTransportCount(1);

        $this->assertDatabaseHasCarrierModeOfTransport([
            'id' => 1,
        ]);
    }
}
