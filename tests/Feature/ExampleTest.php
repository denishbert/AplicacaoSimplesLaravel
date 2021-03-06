<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\Concerns\InteractsWithConsole;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, InteractsWithConsole;
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan("key:generate");
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        $this->seed();
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
