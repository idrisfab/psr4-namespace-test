<?php
/**
 * Created by PhpStorm.
 * User: idris
 * Date: 09/11/2016
 * Time: 00:10
 */

//require __DIR__."/../vendor/autoload.php";

use App\Libraries\Calculator as Calc;

/**
 * @property  calc
 * @property Calc calc
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->calc = new Calc();
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($x, $y, $sum)
    {
        $this->assertEquals($sum, $this->calc->add($x,$y), 'The Add function is not working properly');
    }

/*    public function testAddNumbers()
    {
        $this->assertEquals(4, $this->calc->add(2,2), 'The Add function is not working properly');
        $this->assertEquals(5, $this->calc->add(2.5,2.5), 'The Add function is not working properly');
    }*/

    public function inputNumbers()
    {
        return [
            [2,2,4],
            [5, 5, 10],
            [2.5, 2.5, 10]
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowExceptionIfNonNumberIsPassed()
    {
        $this->calc->add('a', []);
    }
}











