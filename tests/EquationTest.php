<?php
use polueva\Equation;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class EquationTest extends TestCase {
    /**
     * @dataProvider providerEquation
     */
    public function testEquation($a, $b, $res) {
        $fTest = new Equation();
        $this->assertEquals($res, $fTest->line($a, $b));
    }
    public function providerEquation ()
    {
        return array (
            array (2, 2, [-1]),
            array (-4, 4, [1]),
            array (440, 44, [-0.1]),

        );
    }
    /**
     * @dataProvider providerEquationEx
     */
    public function testEquationEx($a, $b, $res) {
        $this->expectException(\polueva\PoluevaException::class);
        $fTest = new Equation();
        $this->assertEquals($res, $fTest->line($a, $b));
    }
    public function providerEquationEx ()
    {
        return array (
            array (0, 1, 0),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}