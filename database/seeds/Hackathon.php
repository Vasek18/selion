<?php

use Illuminate\Database\Seeder;

class Hackathon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Competence::where('id', '>', 0)->delete();
        // создаём компетенции
        \App\Models\Competence::create(
            [
                'name' => 'PHP',
            ]
        );
        \App\Models\Competence::create(
            [
                'name' => 'Javascript',
            ]
        );
        \App\Models\Competence::create(
            [
                'name' => 'Глазная хирургия',
            ]
        );

        \App\Models\Employer::where('id', '>', 0)->delete();
        // Работодатели
        \App\Models\Employer::create(
            [
                'name' => 'Шаркон',
            ]
        );
        \App\Models\Employer::create(
            [
                'name' => 'SpaceX',
            ]
        );
        \App\Models\Employer::create(
            [
                'name' => 'Tesla',
            ]
        );

        \App\Models\Test::where('id', '>', 0)->delete();
        // создаём тесты
        \App\Models\Test::create(
            [
                'name' => 'Какой я сорт хлеба?',
            ]
        );
        \App\Models\Test::create(
            [
                'name' => 'Сможете ли вы зарегистрировать на Цифровой прорыв с первого раза?',
            ]
        );
    }
}
