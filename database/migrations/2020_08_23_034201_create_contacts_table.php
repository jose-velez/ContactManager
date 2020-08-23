<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('email', 100)->unique();
            $table->string('phone', 100);
            $table->string('social_media')->nullable();
            $table->date("birth_date");
            $table->string("contact_method");
            $table->string("role", 100);
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

             $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
