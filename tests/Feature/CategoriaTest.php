<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriaTest extends TestCase
{
    public function test_categories_view(): void
    {
        $response = $this->get('/categorias');
        

        $response->assertStatus(200);
    }
    public function test_categories_create_view(): void
    {
        $response = $this->get(uri:'/categorias/crear');
        
        $response->assertNotFound();
    }
}
