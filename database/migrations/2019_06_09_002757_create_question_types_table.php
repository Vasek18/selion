<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'question_types',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('code');
            }
        );

        DB::table('question_types')->insert(
            array(
                'name' => 'Строка',
                'code' => 'string',
            )
        );
        DB::table('question_types')->insert(
            array(
                'name' => 'Чекбокс',
                'code' => 'checkbox',
            )
        );
        DB::table('question_types')->insert(
            array(
                'name' => 'Радио',
                'code' => 'radio',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_types');
    }
}
