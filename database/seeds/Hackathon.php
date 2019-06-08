<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hackathon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competence1 = \App\Models\Competence::where('id', '>', 0)->delete();
        // создаём компетенции
        \App\Models\Competence::create(
            [
                'name' => 'PHP',
            ]
        );
        $competence2 = \App\Models\Competence::create(
            [
                'name' => 'Javascript',
            ]
        );
        $competence3 = \App\Models\Competence::create(
            [
                'name' => 'Глазная хирургия',
            ]
        );

        \App\Models\Employer::where('id', '>', 0)->delete();
        // Работодатели
        $employer1 = \App\Models\Employer::create(
            [
                'name' => 'Шаркон',
            ]
        );
        $employer2 = \App\Models\Employer::create(
            [
                'name' => 'SpaceX',
            ]
        );
        $employer3 = \App\Models\Employer::create(
            [
                'name' => 'Tesla',
            ]
        );

        DB::table('test_competences')->truncate(); // пивотная таблица для компетенций тестов
        \App\Models\Test::where('id', '>', 0)->delete();
        // создаём тесты
        $test1 = \App\Models\Test::create(
            [
                'name'        => 'Какой я сорт хлеба?',
                'employer_id' => $employer2->id,
            ]
        );
        $test2 = \App\Models\Test::create(
            [
                'name' => 'Сможете ли вы зарегистрировать на Цифровой прорыв с первого раза?',
            ]
        );
        $test3 = \App\Models\Test::create(
            [
                'name' => 'Циклопы',
            ]
        );
        $test3->competences()->attach($competence3->id);
    }
}
