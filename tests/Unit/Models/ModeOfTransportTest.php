<?php

namespace Tests\Unit\Models;

use App\Models\ModeOfTransport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModeOfTransportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function id_is_quarded()
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
