<?php


namespace Excel\Entity;


class Cell implements EntityInterface
{
    /**
     * @var \Excel\Entity\Coordinate\Coordinate
     */
    public $coordinate;

    /**
     * @var \Excel\Entity\Value\ValueInterface
     */
    public $value;
}
