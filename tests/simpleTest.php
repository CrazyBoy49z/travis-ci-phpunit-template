<?php


class simpleTest extends PHPUnit_TestCase
{

    public function test1()
    {
        $this->assertEqual(true,true);
    }

    /**
     * @depends test1
     */
    public function test2()
    {
        $this->assertEqual(false,false);
    }

}
?>