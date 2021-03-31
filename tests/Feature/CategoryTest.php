<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    /** @test */
    public function return_view_page_list_category()
    {
        $response = $this->get('/categoria');
        $response->assertStatus(200);
    }

    /** @test */
    public function return_view_page_register_category()
    {
        $response = $this->get('/categoria/novo');
        $response->assertStatus(200);
    }
}
