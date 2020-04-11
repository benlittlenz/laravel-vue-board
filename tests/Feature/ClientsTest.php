<?php

namespace Tests\Feature;

use App\User;
use App\Client;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ClientsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function an_authenticated_user_can_add_a_client()
    {
        $user = Sanctum::actingAs(
            factory(User::class)->create(),
            ['*']
        );
        if($user) {
            $this->post('/api/clients', $this->data());
        }
        
        $client = Client::first();

        $this->assertEquals('Test Client', $client->company);
        $this->assertEquals('test@gmail.com', $client->email);
        $this->assertEquals('123556677', $client->phone);
        $this->assertEquals('Bob Doe', $client->contact);
    }

    /** @test */
    public function fields_are_required()
    {
        collect(['company', 'email', 'phone', 'contact'])
            ->each(function($field) {
                $response = $this->post('/api/clients', 
                array_merge($this->data(), [ $field => '' ]));

                $response->assertSessionHasErrors($field);
                $this->assertCount(0, Client::all());
            }); 
    }

    /** @test */
    public function email_must_be_valid()
    {
        $response = $this->post('/api/clients', 
        array_merge($this->data(), [ 'email' => 'Not an email' ]));

        $response->assertSessionHasErrors('email');
        $this->assertCount(0, Client::all());
    }

    /** @test */
    public function a_client_can_be_retrieved()
    {
        $client = factory(Client::class)->create();

        $response = $this->get('/api/clients/' . $client->id);

        $response->assertJson([
            'company' => $client->company,
            'email' => $client->email,
            'phone' => $client->phone,
            'contact' => $client->contact
        ]);
    }

    /** @test */
    public function a_client_can_be_edited()
    {

        $this->withoutExceptionHandling();

        $client = factory(Client::class)->create();

        $response = $this->patch('/api/clients/' . $client->id, $this->data());

        $client = $client->fresh();

        $this->assertEquals('Test Client', $client->company);
        $this->assertEquals('test@gmail.com', $client->email);
        $this->assertEquals('123556677', $client->phone);
        $this->assertEquals('Bob Doe', $client->contact);
    }

    /** @test */
    public function a_client_can_be_deleted()
    {
        $client = factory(Client::class)->create();

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
