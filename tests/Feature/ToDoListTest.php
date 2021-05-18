<?php


namespace Tests\Feature;


use App\ToDoList;
use App\User;
use Tests\TestCase;

class ToDoListTest extends TestCase
{
    /** @test */
public function test_to_do_list_store(){
    $this->withoutExceptionHandling();
    $this->actingAs(User::find(1));

    $response = $this->post('/timeline/upload_todo',[
        'user_id'=>"1",
        "todo_list"=>"Random",
        "status"=>"active"
    ]);
    $this->assertCount(20, ToDoList::all());
}

}
