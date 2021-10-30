<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    /**
     
     *
     * @test
     */
    public function itListCustomers()
    {
        $response = $this->get('/api/customers');

        $response->assertOk();
        dd($response->json('data'));
    }
}
