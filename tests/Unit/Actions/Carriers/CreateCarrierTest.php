<?php

namespace Tests\Unit\Actions\Carriers;

use App\Actions\Carriers\CreateCarrier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateCarrierTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_create_carrier()
    {
        (new CreateCarrier)->execute([
            'name' => 'Carrier name',
        ]);

        $this->assertDatabaseCarrierCount(1);

        $this->assertDatabaseHasCarrier([
            'id' => 1,
            'name' => 'Carrier name',
            'slug' => 'carrier-name',
        ]);
    }
}
