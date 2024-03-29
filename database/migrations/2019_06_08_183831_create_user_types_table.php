<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'user_types',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('code');
            }
        );

        DB::table('user_types')->insert(
            array(
                'name' => 'Студент',
                'code' => 'student',
            )
        );
        DB::table('user_types')->insert(
            array(
                'name' => 'ВУЗ',
                'code' => 'vuz',
            )
        );
        DB::table('user_types')->insert(
            array(
                'name' => 'Работодатель',
                'code' => 'employer',
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
        Schema::dropIfExists('user_types');
    }
}
