<?php

namespace Tests\Unit\Models;

use App\Models\Carrier;
use App\Models\ModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarrierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that model if is guarded.
     *
     * @return void
     */
    public function testThatIdIsGuarded(): void
    {
        Carrier::create(Carrier::factory()->raw([
            'id' => 123,
        ]));

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => 1,
        ]);
    }

    /**
     * Test that mode of transports has many relationship is working.
     *
     * @return void
     */
    public function testThatHasManyModeOfTransports(): void
    {
        $carrier = Carrier::factory()->create();

        ModeOfTransport::factory()
            ->count(2)
            ->create([
                'carrier_id' => $carrier->id,
            ]);

        $this->assertTrue($carrier->modeOfTransports->isNotEmpty());
        $this->assertEquals(2, $carrier->modeOfTransports()->count());
    }

    /**
     * Test that can create mode of transport for carrier by usin relationship.
     *
     * @return void
     */
    public function testThatModeOfTransportsRelationsShipCanBeUsedToCreate(): void
    {
        $carrier = Carrier::factory()->create();

        $modeOfTransport = $carrier->modeOfTransports()
            ->create(ModeOfTransport::factory()->make()->toArray());

        $this->assertDatabaseHasModeOfTransport([
            'id' => $modeOfTransport->id,
            'carrier_id' => $carrier->id,
        ]);
    }
}
