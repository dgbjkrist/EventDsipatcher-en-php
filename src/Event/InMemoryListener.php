<?php

/**
 * 
 */

namespace App\Event;
class InMemoryListener
{
	
	public function onSaveInMemory()
	{
		echo "Calling onSaveInMemory() method or action on event 'save' without argument given";
		echo "\n";
	}
}