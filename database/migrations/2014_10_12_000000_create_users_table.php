<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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

            $table->string('family');
            $table->string('name');
            $table->string('name_father');
            $table->string('telephone')->unique();
<<<<<<< HEAD
            $table->integer('gender')->default(0);
=======
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
            /*$table->string('auto');*/
            $table->string('adress');

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
        Schema::dropIfExists('users');
    }
}
