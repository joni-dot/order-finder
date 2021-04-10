<?php

namespace Tests\Unit\Models;

use App\Models\Carrier;
use App\Models\ModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarrierTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function id_is_quarded()
    {
        Carrier::create(Carrier::factory()->raw([
            'id' => 123,
        ]));

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => 1,
        ]);
    }

    /** @test */
    public function it_has_mode_of_transports()
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

    /** @test */
    public function it_can_create_mode_of_transport_by_using_relation()
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
