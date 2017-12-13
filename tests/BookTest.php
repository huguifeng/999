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
        $this->assertEquals('555',$book->getBook(1) );
    }
}