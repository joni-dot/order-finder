<?php

namespace Tests;

use App\Models\Carrier;
use App\Models\CarrierModeOfTransport;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Assert that database has carrier.
     *
     * @param array $data
     */
    protected function assertDatabaseHasCarrier(array $data): void
    {
        $this->assertDatabaseHas((new Carrier)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of carriers.
     *
     * @param int $data
     */
    protected function assertDatabaseCarrierCount(int $count): void
    {
        $this->assertDatabaseCount((new Carrier)->getTable(), $count);
    }

    /**
     * Assert that database has carrier mode of transport.
     *
     * @param array $data
     */
    protected function assertDatabaseHasCarrierModeOfTransport(array $data): void
    {
        $this->assertDatabaseHas((new CarrierModeOfTransport)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of carriers mode of transport.
     *
     * @param int $data
     */
    protected function assertDatabaseCarrierModeOfTransportCount(int $count): void
    {
        $this->assertDatabaseCount((new CarrierModeOfTransport)->getTable(), $count);
    }
}
