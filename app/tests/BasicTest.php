<?php
include 'Box.php';

class BasicTest extends TestCase
{
    /**
* A basic test example.
*
* @return void
*/

	public function test()
    {

        $box = new Box;

        $this->assertTrue($box->Hello());
        $this->assertTrue($box->Goodbye());
    }
	
}