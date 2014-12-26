<?php


namespace Excel\Entity;

use Excel\Entity\Collection\CellCollection;

class Sheet implements EntityInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var CellCollection
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
