<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactStoreTest extends TestCase
{

    use WithFaker;
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_valid_fields()
    {

        $this->setUpFaker();

        $response = $this->post(route('home'),[
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'subject' => $this->faker->title(),
            'message' => $this->faker->text()
        ]);

        //$response->assertStatus(302);
        $response->assertValid(['name']);
        $response->assertValid(['phone']);
        $response->assertValid(['email']);
        $response->assertValid(['subject']);
        $response->assertValid(['message']);

    }

}
