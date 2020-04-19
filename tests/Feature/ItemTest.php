<?php

namespace Tests\Feature;

use App\Item;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
     public function a_item_can_be_added()
     {
        $this->withoutExceptionHandling();
        
        $this->post('/api/invoice_items', $this->data());
        $client = Item::first();

        $this->assertEquals('Test Item', $client->name);
        $this->assertEquals('Test item description', $client->description);
        $this->assertEquals('2', $client->unit);
        $this->assertEquals('100', $client->price);
     }


    private function data() {
        return [
            'name' => 'Test Item',
            'description' => 'Test item description',
            'unit' => '2',
            'price' => '100'
        ];
    }
}
