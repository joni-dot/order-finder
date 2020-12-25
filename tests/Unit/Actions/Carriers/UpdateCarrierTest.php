<?php

namespace Tests\Unit\Actions\Carriers;

use App\Actions\Carriers\UpdateCarrier;
use App\Models\Carrier;
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

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => $existingCarrier->id,
            'name' => 'New name',
        ]);
    }
}
