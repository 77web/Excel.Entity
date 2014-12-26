<?php


namespace Excel\Entity\Collection;

use Excel\Entity\Sheet;


class SheetCollection extends \ArrayIterator implements CollectionInterface
{
    /**
     * @return Sheet
     */
    public function current()
    {
        return parent::current();
    }
}
