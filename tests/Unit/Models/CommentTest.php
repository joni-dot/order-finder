<?php

namespace Tests\Unit\Models;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function id_is_quarded()
    {
        Comment::create(Comment::factory()->raw([
            'id' => 123,
        ]));

        $this->assertDatabaseCommentCount(1);

        $this->assertDatabaseHasComment([
            'id' => 1,
        ]);
    }
}
