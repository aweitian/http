<?php


class ResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testloadEnv()
    {
        $test = new Aw\Http\Response('<h1>path</h1>');

        $this->assertEquals($test->getContent(),'<h1>path</h1>');
    }
}




