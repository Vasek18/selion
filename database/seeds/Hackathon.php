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
                'name'        => 'Вы булка?',
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

        \App\Models\Question::where('id', '>', 0)->delete();
        // создаём вопросы
        $question4 = \App\Models\Question::create(
            [
                'name'    => 'Вы загорелый?',
                'test_id' => $test1->id,
                'type_id' => DB::table('question_types')->where('code', 'radio')->first()->id,
            ]
        );
        $answer7 = \App\Models\Answer::create(
            [
                'question_id' => $question4->id,
                'answer'      => 'Да',
                'is_right'    => false,
            ]
        );
        $answer8 = \App\Models\Answer::create(
            [
                'question_id' => $question4->id,
                'answer'      => 'Нет',
                'is_right'    => true,
            ]
        );

        $question5 = \App\Models\Question::create(
            [
                'name'    => 'Вы мягкий?',
                'test_id' => $test1->id,
                'type_id' => DB::table('question_types')->where('code', 'radio')->first()->id,
            ]
        );
        $answer7 = \App\Models\Answer::create(
            [
                'question_id' => $question5->id,
                'answer'      => 'Да',
                'is_right'    => true,
            ]
        );
        $answer8 = \App\Models\Answer::create(
            [
                'question_id' => $question5->id,
                'answer'      => 'Нет',
                'is_right'    => false,
            ]
        );

        $question1 = \App\Models\Question::create(
            [
                'name'    => 'Смущает ли вас необходимость регистрироваться на разных сервисах?',
                'test_id' => $test2->id,
                'type_id' => DB::table('question_types')->where('code', 'radio')->first()->id,
            ]
        );
        $answer1 = \App\Models\Answer::create(
            [
                'question_id' => $question1->id,
                'answer'      => 'Да',
                'is_right'    => true,
            ]
        );
        $answer2 = \App\Models\Answer::create(
            [
                'question_id' => $question1->id,
                'answer'      => 'Нет',
                'is_right'    => false,
            ]
        );

        $question2 = \App\Models\Question::create(
            [
                'name'     => 'Нужны ли вам вводные данные, чтобы начать кодить?',
                'test_id'  => $test2->id,
                'type_id'  => DB::table('question_types')->where('code', 'radio')->first()->id,
                'required' => false,
            ]
        );
        $answer3 = \App\Models\Answer::create(
            [
                'question_id' => $question2->id,
                'answer'      => 'Да',
                'is_right'    => false,
            ]
        );
        $answer4 = \App\Models\Answer::create(
            [
                'question_id' => $question2->id,
                'answer'      => 'Нет',
                'is_right'    => true,
            ]
        );

        $question3 = \App\Models\Question::create(
            [
                'name'    => 'Лила?',
                'test_id' => $test3->id,
                'type_id' => DB::table('question_types')->where('code', 'checkbox')->first()->id,
            ]
        );
        $answer5 = \App\Models\Answer::create(
            [
                'question_id' => $question3->id,
                'answer'      => 'Циклоп',
                'is_right'    => true,
            ]
        );
        $answer6 = \App\Models\Answer::create(
            [
                'question_id' => $question3->id,
                'answer'      => 'Красотка',
                'is_right'    => true,
            ]
        );

        $question7 = \App\Models\Question::create(
            [
                'name'    => 'Привет',
                'test_id' => $test3->id,
                'type_id' => DB::table('question_types')->where('code', 'string')->first()->id,
            ]
        );
    }
}
