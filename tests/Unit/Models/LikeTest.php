<?php

namespace Tests\Unit\Models;

use App\Models\Like;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LikeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function id_is_quarded()
    {
        Like::create(Like::factory()->raw([
            'id' => 123,
        ]));

        $this->assertDatabaseLikeCount(1);

        $this->assertDatabaseHasLike([
            'id' => 1,
        ]);
    }
}
