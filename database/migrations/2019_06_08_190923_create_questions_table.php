<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'questions',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('test_id');
                $table->string('name');
                $table->text('description')->nullable();
                $table->bigInteger('type_id');
                $table->boolean('required')->default(true);
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
        Schema::dropIfExists('questions');
    }
}
