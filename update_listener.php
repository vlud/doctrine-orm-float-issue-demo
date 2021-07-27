<?php
use Doctrine\Persistence\Event\LifecycleEventArgs;

class MyEventListener
{
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityManager = $args->getObjectManager();

        var_dump(get_class($args->getEntity()));
        var_dump($args->getEntityChangeSet());
    }
}
