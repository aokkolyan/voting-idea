<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeaTest extends TestCase
{
    use RefreshDatabase;
    public function test_show_idea_main_page()
    {

        $ideaOne = Idea::factory()->create([
            'title' => 'Test Idea',
            'description' => 'This is a test idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'Test Idea Tow',
            'description' => 'This is a test idea ',   
        ]);

        $respone = $this->get(route('idea.index'));

        $respone->assertSuccessful();

        $respone->assertSee($ideaOne->title);
        $respone->assertSee($ideaOne->description);

        $respone->assertSee($ideaTwo->title);
        $respone->assertSee($ideaTwo->description);
       
    }

    public function single_idea_show_dirrectly_page()
    {

        $idea = Idea::factory()->create([
            'title' => 'Test Idea',
            'description' => 'This is a test idea',
        ]);


        $respone = $this->get(route('idea.show',$idea));

        $respone->assertSuccessful();

        $respone->assertSee($idea->title);
        $respone->assertSee($idea->description);
       
    }
}
