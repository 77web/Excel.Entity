<?php


namespace Excel\Entity;

use Excel\Entity\Collection\SheetCollection;

class Book implements EntityInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var SheetCollection
     */
    public $sheets;
}
