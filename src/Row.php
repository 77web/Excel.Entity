<?php


namespace Excel\Entity;


class Row implements EntityInterface
{
    /**
     * @var integer
     */
    public $number;

    /**
     * @var bool
     */
    public $visible;

    /**
     * @var integer
     */
    public $height;
}
