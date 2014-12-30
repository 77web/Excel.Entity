<?php


namespace Excel\Entity\Factory;


use Excel\Entity\Book;
use Excel\Entity\Collection\SheetCollection;

class BookFactory implements FactoryInterface
{
    /**
     * @param string $name
     * @param SheetCollection|null $sheets
     * @return Book
     */
    public function create($name = null, SheetCollection $sheets = null)
    {
        $book = new Book();
        $book->name = $name;
        $book->sheets = $sheets ? $sheets : new SheetCollection;

        return $book;
    }
}
