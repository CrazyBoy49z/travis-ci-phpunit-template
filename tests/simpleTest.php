<?php


class simpleTest extends PHPUnit_Framework_TestCase
{

    public function test1()
    {
        $this->assertEquals(true,true);
    }

    /**
     * @depends test1
     */
    public function test2()
    {
        $this->assertEquals(false,false);
    }

}
?>