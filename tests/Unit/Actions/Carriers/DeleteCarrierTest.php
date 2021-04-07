<?php

namespace Tests\Unit\Actions\Carriers;

use App\Actions\Carriers\DeleteCarrier;
use App\Events\Carriers\CarrierDeleted;
use App\Models\Carrier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class DeleteCarrierTest extends TestCase
{
    use RefreshDatabase;

    /** @var \App\Models\Carrier */
    protected $carrier;

    protected function setUp(): void
    {
        parent::setUp();

        Event::fake();

        $this->carrier = Carrier::factory()->create();

        (new DeleteCarrier)->execute($this->carrier);
    }

    /**
     * Test that DeleteCarrier Action can delete carrier.
     *
     * @return void
     */
    public function testThatItCanDeleteCarrier(): void
    {
        $this->assertDatabaseMissingCarrier([
            'id' => $this->carrier->id,
        ]);
    }

    /**
     * Test that DeleteCarrier Action dispatches event.
     *
     * @return void
     */
    public function testThatItDispatchEvent(): void
    {
        Event::assertDispatchedTimes(CarrierDeleted::class, 1);

        Event::assertDispatched(CarrierDeleted::class, function ($event) {
            return $event->carrier == $this->carrier;
        });
    }
}
