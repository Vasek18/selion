<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'user_universities',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('university_id');
                $table->bigInteger('user_id');
                $table->date('enter');
                $table->date('leave');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_universities');
    }
}
