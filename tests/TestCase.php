<?php

namespace Tests;

use App\Models\Carrier;
use App\Models\Comment;
use App\Models\Counter;
use App\Models\Like;
use App\Models\ModeOfTransport;
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
     * Assert that database missing carrier.
     *
     * @param array $data
     */
    protected function assertDatabaseMissingCarrier(array $data): void
    {
        $this->assertDatabaseMissing((new Carrier)->getTable(), $data);
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
    protected function assertDatabaseHasModeOfTransport(array $data): void
    {
        $this->assertDatabaseHas((new ModeOfTransport)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of carriers mode of transport.
     *
     * @param int $data
     */
    protected function assertDatabaseModeOfTransportCount(int $count): void
    {
        $this->assertDatabaseCount((new ModeOfTransport)->getTable(), $count);
    }

    /**
     * Assert that database has counter.
     *
     * @param array $data
     */
    protected function assertDatabaseHasCounter(array $data): void
    {
        $this->assertDatabaseHas((new Counter)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of counter.
     *
     * @param int $data
     */
    protected function assertDatabaseCounterCount(int $count): void
    {
        $this->assertDatabaseCount((new Counter)->getTable(), $count);
    }

    /**
     * Assert that database has comment.
     *
     * @param array $data
     */
    protected function assertDatabaseHasComment(array $data): void
    {
        $this->assertDatabaseHas((new Comment)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of comments.
     *
     * @param int $data
     */
    protected function assertDatabaseCommentCount(int $count): void
    {
        $this->assertDatabaseCount((new Comment)->getTable(), $count);
    }

    /**
     * Assert that database has like.
     *
     * @param array $data
     */
    protected function assertDatabaseHasLike(array $data): void
    {
        $this->assertDatabaseHas((new Like)->getTable(), $data);
    }

    /**
     * Assert that database has specific amount of likes.
     *
     * @param int $data
     */
    protected function assertDatabaseLikeCount(int $count): void
    {
        $this->assertDatabaseCount((new Like)->getTable(), $count);
    }
}
