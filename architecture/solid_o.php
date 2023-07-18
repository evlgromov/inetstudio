<?php

interface SomeObjectInterface {
    public function getObjectName() : string;
}


class SomeObject implements SomeObjectInterface {
    protected $name;

    public function __construct(string $name) { }

    public function getObjectName() : string {
        return $this->name;
    }
}

class SomeObjectsHandler {
    public function __construct() { }

    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
                $handlers[] = 'handle_' . $object->getObjectName();
        }

        return $handlers;
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);