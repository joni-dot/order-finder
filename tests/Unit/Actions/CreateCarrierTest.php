<?php

namespace Tests\Unit\Actions;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Actions\Carriers\CreateCarrier;

class CreateCarrierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that CreateCarrierAction can create carrier.
     *
     * @return void
     */
    public function testThatItCanCreateCarrier(): void
    {
        (new CreateCarrier)->execute([
            'name' => 'Carrier name',
        ]);

        $this->assertDatabaseCount('carriers', 1);

        $this->assertDatabaseHas('carriers', [
            'id' => 1,
            'name' => 'Carrier name',
        ]);
    }
}
