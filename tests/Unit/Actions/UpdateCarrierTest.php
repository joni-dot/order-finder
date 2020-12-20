<?php

namespace Tests\Unit\Actions;

use App\Actions\Carriers\UpdateCarrier;
use App\Carrier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UpdateCarrierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that UpdateCarrierAction can create carrier.
     *
     * @return void
     */
    public function testThatItCanUpdateCarrier(): void
    {
        $existingCarrier = Carrier::factory()->create([
            'name' => 'Old name',
        ]);

        (new UpdateCarrier)->execute($existingCarrier, [
            'name' => 'New name',
        ]);

        $this->assertDatabaseCount('carriers', 1);

        $this->assertDatabaseHas('carriers', [
            'id' => $existingCarrier->id,
            'name' => 'New name',
        ]);
    }
}
