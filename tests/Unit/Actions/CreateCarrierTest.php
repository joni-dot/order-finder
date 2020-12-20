<?php

namespace Tests\Unit\Actions;

use App\Actions\Carriers\CreateCarrier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => 1,
            'name' => 'Carrier name',
        ]);
    }
}
