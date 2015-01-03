<?php


namespace Excel\Entity\Factory;


use Excel\Entity\Collection\CellCollection;
use Excel\Entity\Collection\RowCollection;

class SheetFactoryTest extends \PHPUnit_Framework_TestCase 
{
    public function test_create()
    {
        $factory = new SheetFactory();

        $sheet = $factory->create();
        $this->assertInstanceOf('\Excel\Entity\Sheet', $sheet);
        $this->assertNull($sheet->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\CellCollection', $sheet->cells);
        $this->assertInstanceOf('\Excel\Entity\Collection\RowCollection', $sheet->rows);

        $sheet = $factory->create('test1');
        $this->assertEquals('test1', $sheet->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\CellCollection', $sheet->cells);

        $cells = new CellCollection;
        $rows = new RowCollection;
        $sheet = $factory->create('test2', $cells, $rows);
        $this->assertEquals('test2', $sheet->name);
        $this->assertSame($cells, $sheet->cells);
        $this->assertSame($rows, $sheet->rows);

        $rows = new RowCollection;
    }
}
