<?php

/**
 * 
 */

namespace App\Event;

use App\Model\User;
class DatabaseListener
{
	
	public function onSaveDatabase(User $user)
	{
		echo "Calling onSaveDatabase() method on event 'save' $user->name";
		echo "\n";
	}
}