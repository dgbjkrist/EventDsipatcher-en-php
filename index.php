<?php 

use App\Event\DatabaseListener;
use App\Event\EventDispatcher;
use App\Event\InMemoryListener;
use App\Model\User;

require __DIR__.'/vendor/autoload.php';

#WISH SEND EVENT 
$user = new User('kokora');

$event = new EventDispatcher;

#METHOD addListenner(string $name, $listener, $method, $argument = null ) ADD OR RECORD $listener eg. new onSaveDatabase TO LISTENER ARAY AND WHICH ARE USED BY METHOD dispatch()
$event->addListenner('save', new DatabaseListener, 'onSaveDatabase');
$event->addListenner('save', new InMemoryListener, 'onSaveInMemory');
$event->addListenner('modify', new InMemoryListener, 'onSaveInMemory');

$event->dispatch('save', $user);
$event->dispatch('modify', $user);