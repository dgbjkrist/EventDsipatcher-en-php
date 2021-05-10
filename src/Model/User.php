<?php

/**
 * 
 */

namespace App\Model;
class User
{
	public $name;
	
	public function __construct($name)
	{
		# code...
		$this->name = $name;
	}
}