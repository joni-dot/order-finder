<?php

namespace Tests\Unit\Actions\ModeOfTransports;

use App\Actions\ModeOfTransports\CreateModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_mode_of_transport()
    {
        (new CreateModeOfTransport)->execute([
            'name' => 'Example name',
            'price' => 10.00,
            'price_vat' => 12.40,
        ]);

        $this->assertDatabaseModeOfTransportCount(1);

        $this->assertDatabaseHasModeOfTransport([
            'id' => 1,
            'name' => 'Example name',
            'price' => 1000,
            'price_vat' => 1240,
        ]);
    }
}
