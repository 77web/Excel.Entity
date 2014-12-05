<?php


namespace Excel\Entity;


class Sheet implements EntityInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $cells;

    /**
     * @var array
     */
    public $rows;

    /**
     * @var array
     */
    public $columns;
}
