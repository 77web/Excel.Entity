<?php


namespace Excel\Entity\Factory;


use Excel\Entity\Collection\CellCollection;
use Excel\Entity\Collection\RowCollection;
use Excel\Entity\Sheet;

class SheetFactory implements FactoryInterface
{
    /**
     * @param string|null $name
     * @param CellCollection|null $cellCollection
     * @param RowCollection|null $rowCollection
     * @return Sheet
     */
    public function create($name = null, CellCollection $cellCollection = null, RowCollection $rowCollection = null)
    {
        $sheet = new Sheet;
        $sheet->name = $name;
        $sheet->cells = $cellCollection ? $cellCollection : new CellCollection;
        $sheet->rows = $rowCollection ? $rowCollection : new RowCollection;

        return $sheet;
    }
}
