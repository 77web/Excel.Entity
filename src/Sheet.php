<?php


namespace Excel\Entity;

use Excel\Entity\Collection\CellCollection;
use Excel\Entity\Collection\RowCollection;

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
     * @var RowCollection
     */
    public $rows;

    /**
     * @var array
     */
    public $columns;
}
