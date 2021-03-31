<?php

namespace Tests\Unit;

use App\PayType;
use PHPUnit\Framework\TestCase;

class PayTypeTest extends TestCase
{
    /**
     * @test
     */
    public function check_if_pay_type_columns_is_correct()
    {
        $paytype = new PayType();
        $expected = [ 'name'];
        $arrayCompared = array_diff($expected, $paytype->getFillable());
        //dd($arrayCompared);
        $this->assertEquals(0, count($arrayCompared));
    }
}
