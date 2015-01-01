<?php


namespace Excel\Entity\Factory;


use Excel\Entity\Collection\CellCollection;
use Excel\Entity\Sheet;

class SheetFactory implements FactoryInterface
{
    /**
     * @param string|null $name
     * @param CellCollection|null $cellCollection
     * @return Sheet
     */
    public function create($name = null, CellCollection $cellCollection = null)
    {
        $sheet = new Sheet;
        $sheet->name = $name;
        $sheet->cells = $cellCollection ? $cellCollection : new CellCollection;

        return $sheet;
    }
}
