<?php


namespace Excel\Entity\Collection;

use Excel\Entity\Row;

class RowCollection extends \ArrayIterator implements CollectionInterface
{
    /**
     * @return Row
     */
    public function current()
    {
        return parent::current();
    }
}
