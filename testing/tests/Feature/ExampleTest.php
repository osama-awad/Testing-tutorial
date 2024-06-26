<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(status:200);
    }
  
    public function test_the_homepag_contains_symfony(): void
    {
        $response = $this->get('/');

        $response->assertStatus(  'Symfony');
        $response->assertStatus(status:200);
    }
}
