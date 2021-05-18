<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function TimeLineTest()
    {
        $response = $this->get('/timeline');

        $response->assertStatus(200);
    }
    /** @test */
    public function HomeTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function StoreTweetTest()
    {
        $this->actingAs(factory(User::class)->create());
        $response = $this->post('/store_tweets');

        $response->assertStatus(302);
    }
    /** @test */
    public function TweetsTest()
    {

        $response = $this->get('/tweets');

        $response->assertStatus(302);
    }

    /** @test */
    public function ProfileTest()
    {

        $response = $this->get('/profile/1');

        $response->assertStatus(404);
    }




}
