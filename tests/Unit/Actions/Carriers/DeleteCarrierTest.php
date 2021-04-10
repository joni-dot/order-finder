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

    /** @test */
    public function it_can_delete_carrier()
    {
        $this->assertDatabaseMissingCarrier([
            'id' => $this->carrier->id,
        ]);
    }

    /** @test */
    public function it_dispatches_event()
    {
        Event::assertDispatchedTimes(CarrierDeleted::class, 1);

        Event::assertDispatched(CarrierDeleted::class, function ($event) {
            return $event->carrier == $this->carrier;
        });
    }
}
