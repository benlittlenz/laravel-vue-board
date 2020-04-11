<?php

namespace Tests\Feature;

use App\Client;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_client_can_be_added()
    {
        $this->post('/api/clients', $this->data());

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

    private function data() {
        return [
            'company' => 'Test Client',
            'email' => 'test@gmail.com',
            'phone' => '123556677',
            'contact' => 'Bob Doe'
        ];
    }
}
