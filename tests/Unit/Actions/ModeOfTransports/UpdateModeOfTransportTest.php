<?php

namespace Tests\Unit\Actions\ModeOfTransports;

use App\Actions\ModeOfTransports\UpdateModeOfTransport;
use App\Models\ModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_update_mode_of_transport()
    {
        $modeOfTransport = ModeOfTransport::factory()->create([
            'name' => 'Old',
            'price' => 0,
            'price_vat' => 0,
        ]);

        (new UpdateModeOfTransport)->execute($modeOfTransport, [
            'name' => 'Updated name',
            'price' => 10,
            'price_vat' => 12.40,
        ]);

        $this->assertDatabaseModeOfTransportCount(1);

        $this->assertDatabaseHasModeOfTransport([
            'id' => $modeOfTransport->id,
            'name' => 'Updated name',
            'price' => 1000,
            'price_vat' => 1240,
        ]);
    }
}
