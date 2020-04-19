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

     /** @test */
     public function an_item_can_be_edited()
     {
        $this->withoutExceptionHandling();

        $item = factory(Item::class)->create();
        
        $response = $this->patch('/api/invoice_items/' . $item->id, $this->data());

        $item = $item->fresh();

        $this->assertEquals('Test Item', $item->name);
     }

     /** @test */
     public function an_item_can_be_deleted()
     {
        $this->withoutExceptionHandling();

        $item = factory(Item::class)->create();

        $response = $this->delete('/api/invoice_items/' . $item->id);

        $this->assertCount(0, Item::all());

     }

     /** @test */
    public function fields_are_required()
    {
        collect(['name', 'description', 'unit', 'price'])
            ->each(function($field) {
                $response = $this->post('/api/invoice_items', 
                array_merge($this->data(), [ $field => '' ]));

                $response->assertSessionHasErrors($field);
                $this->assertCount(0, Item::all());
            }); 


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
