<?php

namespace Tests\Feature;

use App\User;
use App\Client;
use App\Project;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ClientsTest extends TestCase
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

    /** @test */
    public function a_list_of_clients_can_be_fetched_relating_to_project()
    {
        $first_client = factory(Client::class)->create();
        $second_client = factory(Client::class)->create();

        //dd($first_project->id);
        $first_project = factory(Project::class)->create([
            'client_id' => $first_client->id,
            'company_id' => 1
        ]);

        $second_project = factory(Project::class)->create([
            'client_id' => $second_client->id,
            'company_id' => 1
        ]);
            //dd($first_project);
        $response = $this->get('/api/clients');
        //dd($response);
        $response->assertJsonCount(1);
    }

    /** @test */
    // public function an_unauthenticated_user_should_be_redirected_to_login()
    // {

    //     $response = $this->post('/api/clients', $this->data());

    //     $response->assertRedirect('/login');

    //     $this->assertCount(0, Client::all());
    // }

    /** @test */
    public function an_authenticated_user_can_add_a_client()
    {
        //dd($user);
        if($this->user) {
            $this->post('/api/clients', $this->data());
            $client = Client::first();
        }
        
        $this->assertEquals('Test Client', $client->company);
        $this->assertEquals('test@gmail.com', $client->email);
        $this->assertEquals('123556677', $client->phone);
        $this->assertEquals('Bob Doe', $client->contact);
    }

/** @test */
    public function fields_are_required()
    {

        if($this->user) {
        collect(['company', 'email', 'phone', 'contact'])
            ->each(function($field) {
                $response = $this->post('/api/clients', 
                array_merge($this->data(), [ $field => '' ]));

                $response->assertSessionHasErrors($field);
                $this->assertCount(0, Client::all());
            }); 
        }

    }

    /** @test */
    public function email_must_be_valid()
    {
        if($this->user) {
            $response = $this->post('/api/clients', 
            array_merge($this->data(), [ 'email' => 'Not an email' ]));
        }

        $response->assertSessionHasErrors('email');
        $this->assertCount(0, Client::all());
    }

    /** @test */
    public function an_authenticated_user_can_retrieve_a_client()
    {

        if($this->user) {
            $client = factory(Client::class)->create();
        }
        

        $response = $this->get('/api/clients/' . $client->id);

        $response->assertJson([
            'company' => $client->company,
            'email' => $client->email,
            'phone' => $client->phone,
            'contact' => $client->contact
        ]);
    }

    /** @test */
    public function an_authenticated_user_can_edit_a_client()
    {

        $this->withoutExceptionHandling();

        if($this->user) {
            $client = factory(Client::class)->create();
        }
        

        $response = $this->patch('/api/clients/' . $client->id, $this->data());

        $client = $client->fresh();

        $this->assertEquals('Test Client', $client->company);
        $this->assertEquals('test@gmail.com', $client->email);
        $this->assertEquals('123556677', $client->phone);
        $this->assertEquals('Bob Doe', $client->contact);
    }

    /** @test */
    public function an_authenticated_user_can_delete_a_client()
    {

        if($this->user) {
            $client = factory(Client::class)->create();
        }

        $response = $this->delete('/api/clients/' . $client->id);

        $this->assertCount(0, Client::all());
    }

    private function data() {
        return [
            'company' => 'Test Client',
            'email' => 'test@gmail.com',
            'phone' => '123556677',
            'contact' => 'Bob Doe'
        ];
    }
}
