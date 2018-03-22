<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;


class SearchTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSuccesfullSearch()
    {
        factory(User::class)->create([
            'name' => 'Sally'
        ]);

        $response = $this->json('POST', '/search', ['name' => 'Sally']);

        $response->assertStatus(200);
    }
}
