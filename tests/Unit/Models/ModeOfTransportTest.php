<?php

namespace Tests\Unit\Models;

use App\Models\ModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that CreateCarrierAction can create carrier.
     *
     * @return void
     */
    public function testThatIdIsGuarded(): void
    {
        ModeOfTransport::create(ModeOfTransport::factory()->raw([
            'id' => 123,
        ]));

        $this->assertDatabaseModeOfTransportCount(1);

        $this->assertDatabaseHasModeOfTransport([
            'id' => 1,
        ]);
    }
}
