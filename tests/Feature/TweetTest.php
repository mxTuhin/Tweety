<?php


namespace Tests\Feature;


use App\ToDoList;
use App\Tweet;
use App\User;
use Tests\TestCase;

/** @test */
class TweetTest extends TestCase
{
    public function test_to_do_list_tweet_post(){
        $this->withoutExceptionHandling();
        $this->actingAs(User::find(1));

        $response = $this->post('/store_tweets',[
            "body"=>"Test Tweet"
        ]);
        $this->assertCount(13, Tweet::all());
    }

}
