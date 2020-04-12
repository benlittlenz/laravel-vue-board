<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void {
        parent::setUp();

        $this->user = Sanctum::actingAs(
            factory(User::class)->create(['company_id' => 1]),
            ['*']
        );
    }

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

    /** @test */
    public function project_fields_are_required()
    {
        collect(['title', 'description'])
        ->each(function($field) {
            $response = $this->post('/api/projects', 
            array_merge($this->data(), [ $field => '' ]));

            $response->assertSessionHasErrors($field);
            $this->assertCount(0, Project::all());
        }); 
    }

    /** @test */
    public function a_user_can_retrieve_a_client()
    {
        $project = factory(Project::class)->create();

        $response = $this->get('/api/projects/' . $project->id);

        $response->assertJson([
            'title' => $project->title,
            'description' => $project->description
        ]);
    }

    /** @test */
    public function a_user_can_edit_a_project()
    {
        $this->withoutExceptionHandling();

        $project = factory(Project::class)->create();

        $response = $this->patch('/api/projects/' . $project->id, $this->data());

        $project = $project->fresh();

        $this->assertEquals('Hey this is a title', $project->title);
        $this->assertEquals('hey this is a description', $project->description);
    }

    /** @test */
    public function a_user_can_delete_a_project()
    {
        $this->withoutExceptionHandling();
        $project = factory(Project::class)->create();

        $response = $this->delete('/api/projects/' . $project->id);
        //dd($response);
        $this->assertCount(0, Project::all());
    }



    private function data() {
        return [
            'title' => 'Hey this is a title',
            'description' => 'hey this is a description'
        ];
    }
}
