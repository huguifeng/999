<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Book;

class BookTest extends TestCase
{
    public function testgetBook()
    {
    	$book = new Book;
    	$book->pushBook(1,"《三体》");
        $this->assertEquals("《三体》",$book->getBook(1) );
    }
}