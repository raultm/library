<?php

namespace Library;

class LibraryTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckLibraryVersion()
    {
    	$this->assertEquals('0.0.1', Library::getLibraryVersion());
    }
 
}
