<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Book;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // basic 
        $this->assertTrue(true);
    }
    
    
    /**
     * Basic book creation test case
     *
     * @return void
     */
    public function bookCreationTest()
    {
        /*class Book extends Model*/
        $book = Book::create['name' => "Software engineering", 'resume' => "Resume ", 
                                 'author' => "Luis Arce", 'editorial' => "Editorial Name", 
                                 'picture' => "http =>//domain.com/book1.png"];

        $this->assertTrue($book->Id > 0);
        $this->assertEquals($book->name == "Software engineering");
        $this->assertEquals($book->resume == "Resume ");
        $this->assertEquals($book->author == "Luis Arce");
        $this->assertEquals($book->editorial == "Editorial Name");
        $this->assertEquals($book->picture == "http://domain.com/book1.png");
    }
}
