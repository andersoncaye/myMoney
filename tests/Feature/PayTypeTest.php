<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PayTypeTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    /** @test */
    public function return_view_page_list_pay_type()
    {
        $response = $this->get('/tipo_pagamento');
        $response->assertStatus(200);
    }

    /** @test */
    public function return_view_page_register_pay_type()
    {
        $response = $this->get('/tipo_pagamento/novo');
        $response->assertStatus(200);
    }
}
