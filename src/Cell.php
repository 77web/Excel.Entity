<?php


namespace Excel\Entity;


class Cell implements EntityInterface
{
    /**
     * @var string
     */
    public $coordinate;

    /**
     * @var string
     */
    public $value;
}
