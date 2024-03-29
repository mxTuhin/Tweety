<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("username");
            $table->string('email');
            $table->string('password');
            $table->string("gender");
            $table->string("country");
            $table->string("profile_img");
            $table->string('bio')->nullable();
            $table->string('cover_photo')->default('defaultCover.png');
            $table->string('workplace')->nullable();
            $table->string('home')->nullable();
            $table->text('hobby')->nullable();
            $table->string('institution')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('flickr')->nullable();
            $table->string('github')->nullable();
            $table->longText('about')->nullable();
            $table->string('cellnum')->nullable();
            $table->string('address')->nullable();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
