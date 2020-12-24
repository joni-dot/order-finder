<?php

namespace Tests\Unit\Models;

use App\Models\Carrier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarrierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that CreateCarrierAction can create carrier.
     *
     * @return void
     */
    public function testThatIdIsGuarded(): void
    {
        $carrierData = Carrier::factory()->make()->toArray();

        Carrier::create(array_merge($carrierData, [
            'id' => 123,
        ]));

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => 1,
        ]);
    }
}
