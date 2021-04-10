<?php

namespace Tests\Unit\Models;

use App\Models\Counter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CounterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function id_is_quarded()
    {
        Counter::create([
            'id' => 123,
            'countable_type' => 'test',
            'quantity' => 10,
        ]);

        $this->assertDatabaseCounterCount(1);

        $this->assertDatabaseHasCounter([
            'id' => 1,
        ]);
    }
}
