<?php

namespace Library;

class Library
{
	private static $version = "0.0.1";
	
	public static function getLibraryVersion(){
		return Library::$version;
	}
}