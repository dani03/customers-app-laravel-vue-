<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;
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

    /**
     * @test 
     */
    public function itCreateCustomer(){
        $response = $this->post('/api/customers',[
            'name' => "mon premier client",
            'tel' => 1293993,
            'is_favorite' => true,

        ]);

        $customers = Customer::all();
        $customer = Customer::first();

        $response->assertOk();

        $this->assertEquals(1, $customers->count());
        $this->assertEquals('mon premier client', $customer->name);
    }
}
