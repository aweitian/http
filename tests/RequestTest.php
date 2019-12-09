<?php


class RequestTest extends PHPUnit_Framework_TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testloadEnv()
    {
        $test = new Aw\Http\Request('/path','get');

        $this->assertEquals($test->getPath(),'/path');
        $this->assertEquals($test->getMethod(),'GET');
        $test->setMethod('post');
        $this->assertEquals($test->getMethod(),'POST');
        $test->setPath('/route');
        $this->assertEquals($test->getPath(),'/route');
        $test->setContent('aa=bb');
        $this->assertEquals($test->getContent(),'aa=bb');
    }

    public function testOriginal()
    {
        $test = new Aw\Http\Request('/path','get');
        $this->assertEquals($test->getPath(),'/path');
        $this->assertEquals($test->getOriginal(),'/path');
        $test->setPath("/new");
        $this->assertEquals($test->getOriginal(),'/path');
        $this->assertEquals($test->getPath(),'/new');
    }
}




