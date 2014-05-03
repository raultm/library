<?php

namespace Library;

class Library
{
	private static $author = "raultm";
	
	public static function getLibraryAuthor(){
		return Library::$author;
	}
}