<?php
use polueva\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \polueva\MyLog::log($str));
    }
    public function providerEquation ()
    {
        return array (
            array ("asdasdasd"),
            array ("aweqweawd"),
            array (124515),
            array (true),
        );
    }
    public function testLogTex()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \polueva\MyLog::log(null));
        $this->assertEquals('',  \polueva\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \polueva\MyLog::write("asd"));
        $this->assertEquals('',   \polueva\MyLog::write());
    }
}