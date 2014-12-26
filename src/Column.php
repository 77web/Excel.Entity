<?php


namespace Excel\Entity;


class Column implements EntityInterface
{
    /**
     * @var integer
     */
    public $number;

    /**
     * @var boolean
     */
    public $visible;

    /**
     * @var integer
     */
    public $width;
}
