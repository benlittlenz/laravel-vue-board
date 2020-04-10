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
        $this->withoutExceptionHandling();

        $this->post('/api/clients', ['name' => 'Test Client']);

        $this->assertCount(1, Client::all());
    }
}
