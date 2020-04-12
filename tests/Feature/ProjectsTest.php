<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_retrieve_a_project()
    {
        $project = factory(Project::class)->create();
        //dd($project);
        $response = $this->get('/api/projects/' . $project->id);

        $this->assertCount(1, Project::all());
    }

    /** @test */
    public function a_user_can_add_a_project()
    {
        $this->withoutExceptionHandling();
        $this->post('/api/projects', $this->data());

        //$this->assertCount(1, Project::all());
        $project = Project::first();

        $this->assertEquals('Hey this is a title', $project->title);
        $this->assertEquals('hey this is a description', $project->description);
    } 


    private function data() {
        return [
            'title' => 'Hey this is a title',
            'description' => 'hey this is a description'
        ];
    }
}
