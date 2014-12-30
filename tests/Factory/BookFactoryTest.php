<?php


namespace Excel\Entity\Factory;

use Excel\Entity\Collection\SheetCollection;

class BookFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function test_create()
    {
        $factory = new BookFactory();

        $book = $factory->create();
        $this->assertInstanceOf('\Excel\Entity\Book', $book);
        $this->assertNull($book->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\SheetCollection', $book->sheets);

        $book = $factory->create('test1');
        $this->assertEquals('test1', $book->name);
        $this->assertInstanceOf('\Excel\Entity\Collection\SheetCollection', $book->sheets);

        $sheets = new SheetCollection;
        $book = $factory->create('test2', $sheets);
        $this->assertEquals('test2', $book->name);
        $this->assertSame($sheets, $book->sheets);
    }
}
