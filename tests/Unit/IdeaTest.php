<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IdeaTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_check_vote_by_user()
    {

        $user = User::factory()->create();
        $userB= User::factory()->create();

        $createCategoryOne = Category::factory()->create(['name' => 'Category One']);
        $statusOpen = Status::factory()->create(['name' => 'Open','classes'=>'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->user_id,
            'category_id' => $createCategoryOne->id,
            'status_id' => $statusOpen->id,
            'title' => 'My first Idea',
            'description'=> 'Description Idea',
        ]);

         Vote::factory()->create([
            'user_id' => $user->user_id,
            'idea_id' => $idea->id,
        ]);
        
       $this->assertTrue( $idea->ifVoteByUser($user));

    }
}
