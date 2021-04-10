<?php

namespace Tests\Unit\Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReinstallTestEnvTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_reinstall_test_env(): void
    {
        $this->artisan('test:reinstall')
            ->expectsOutput('Reinstalling testing environment...')
            ->expectsOutput('Migrating database...')
            ->expectsOutput('Seeding data to the database...')
            ->assertExitCode(0);
    }
}
