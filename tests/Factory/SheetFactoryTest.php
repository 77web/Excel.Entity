<?php


namespace Excel\Entity\Factory;


use Excel\Entity\Collection\CellCollection;

class SheetFactoryTest extends \PHPUnit_Framework_TestCase 
{
    public function test_create()
    {
        $factory = new SheetFactory();

        $sheet = $factory->create();
        $this->assertInstanceOf('\Excel\Entity\Sheet', $sheet);
        $this->assertNull($sheet->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\CellCollection', $sheet->cells);

        $sheet = $factory->create('test1');
        $this->assertEquals('test1', $sheet->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\CellCollection', $sheet->cells);

        $cells = new CellCollection;
        $sheet = $factory->create('test2', $cells);
        $this->assertEquals('test2', $sheet->name);
        $this->assertSame($cells, $sheet->cells);
    }
}
