<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /**
     * Book show test.
     *
     * @return void
     */
    public function bookShowTest()
    {
        $response = $this->action('GET', 'BookController@show', ['bookId' => 1]);
        $view = $response->original;
        $this->assertEquals('Book Test', $view['name']);
    }
}
