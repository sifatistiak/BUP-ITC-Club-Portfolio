<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('email',255)->unique();
            $table->string('phone',255);
            $table->string('blood_group',255);
            $table->string('current_address',255);
            $table->string('permanent_address',255);
            $table->string('home_district',255);
            $table->string('department',255);
            $table->integer('department_roll');
            $table->string('designation',255);
            $table->string('biography',255);
            $table->string('skills',255);
            $table->string('achievement',255);
            $table->string('image',255);
            $table->string('club_id',255)->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
