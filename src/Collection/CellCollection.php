<?php


namespace Excel\Entity\Collection;

use Excel\Entity\Cell;

class CellCollection extends \ArrayIterator implements CollectionInterface
{
    /**
     * @return Cell
     */
    public function current()
    {
        return parent::current();
    }
}
