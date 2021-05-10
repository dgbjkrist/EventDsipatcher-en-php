<?php

/**
 * 
 */

namespace App\Event;

use App\Model\User;

class EventDispatcher
{
	private $listeners = [];

	public function dispatch(string $name, User $user)
	{
		# code...
		foreach ($this->listeners[$name] as $key => $listener) {
			# code...
			$listener['listener']->{$listener['method']}($user);
		}
	}

	public function addListenner(string $name, $listener, $method, $argument = null )
	{
		$this->listeners[$name][]= [
			'listener' => $listener,
			'method' => $method,
			'argument' => $argument
		];
	}
}