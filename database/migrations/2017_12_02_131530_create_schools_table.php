<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 320);
            $table->string('short_name', 16);
            $table->integer('type_id')->unsigned();
            $table->integer('classification_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('school_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);

        });

        Schema::create('school_classifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
        });

        Schema::create('school_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('role', ['Admin', 'Normal User'])->default('Normal User');
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
        Schema::dropIfExists('schools');
        Schema::dropIfExists('school_types');
        Schema::dropIfExists('school_classifications');
        Schema::dropIfExists('school_users');
    }
}
