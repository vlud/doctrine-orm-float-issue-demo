<?php
use Doctrine\Persistence\Event\LifecycleEventArgs;

class MyEventListener
{
    public function preUpdate(LifecycleEventArgs $args)
    {
        var_dump(get_class($args->getEntity()));
        var_dump($args->getEntityChangeSet());
    }
}
