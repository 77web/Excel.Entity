<?php


namespace Excel\Entity\Collection;

use Excel\Entity\Style\StyleSet;

class StyleCollection extends \ArrayIterator implements CollectionInterface
{
    /**
     * @return StyleSet
     */
    public function current()
    {
        return parent::current();
    }
}
