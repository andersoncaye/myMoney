<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class CategoryTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected $idCategory;

    /** @test */
    public function check_if_category_columns_is_correct()
    {
        $category = new Category();
        $expected = [ 'name'];
        $arrayCompared = array_diff($expected, $category->getFillable());
        //dd($arrayCompared);
        $this->assertEquals(0, count($arrayCompared));
    }

    /** @tes */
    public function insert_category()
    {
        $category = new Category();
        $response = $category->create(['name' => 'Teste Automatizado de Inserção']);
        $this->assertEquals(0, $response > 0);
    }
}
