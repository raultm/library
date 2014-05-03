<?php

namespace Library;

class LibraryTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckLibraryAuthor()
    {
    	$this->assertEquals('raultm', Library::getLibraryAuthor());
    }
 
}
