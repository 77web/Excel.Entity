<?php


namespace Excel\Entity;


class Book implements EntityInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $sheets;
}
