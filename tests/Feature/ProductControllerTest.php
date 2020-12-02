<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateProduct()
    {
        $response = $this->post(route('products.store'), [
            'name' => 'xxx',
            'size' => 'XL',
            'price' => '1000',
            'weight' => '2000'
        ]);
        $this->followingRedirects();

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'xxx',
            'size' => 'XL',
            'price' => '1000',
            'weight' => '2000'
        ]);
    }

    public function testUpdateProduct()
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'name' => 'xxx',
            'size' => 'XL',
            'price' => '1000',
            'weight' => '2000'
        ]);

        $this->followingRedirects();

        $response = $this->put(route('products.update', $product), [
            'name' => 'xxx',
            'size' => 'XL',
            'price' => '222000',
            'weight' => '333000'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'xxx',
            'size' => 'XL',
            'price' => '222000',
            'weight' => '333000'
        ]);
    }

    public function testDeleteProduct()
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
            'size' => $product->size,
            'price' => $product->price,
            'weight' => $product->weight,
        ]);

        $this->followingRedirects();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertStatus(200);

        $this->assertDatabaseMissing('products', [
            'name' => $product->name,
            'size' => $product->size,
            'price' => $product->price,
            'weight' => $product->weight,
        ]);
    }

    public function testIndex()
    {
        $product = Product::factory()->create();

        $response = $this->get('/products');

        $response->assertStatus(200);

        $response->assertSee([
            $product->name,
            $product->size,
            $product->price,
            $product->weight,
        ]);
    }

    public function testShow()
    {
        $product = Product::factory()->create();

        $response = $this->get('/products/'. $product->id);

        $response->assertStatus(200);

        $response->assertSee([
            $product->name,
            $product->size,
            $product->price,
            $product->weight
        ]);
    }

}

