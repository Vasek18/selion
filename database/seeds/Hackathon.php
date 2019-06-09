<?php

use App\Models\University;
use App\Models\User;
use App\Models\UserType;
use Carbon\Carbon;
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
        \App\Models\Competence::where('id', '>', 0)->delete();
        // создаём компетенции
        $competence1 = \App\Models\Competence::create(
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
        $competence4 = \App\Models\Competence::create(
            [
                'name' => 'Управление',
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
        \App\Models\Answer::where('id', '>', 0)->delete();
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

        User::where('email', 'rocketman@tesla.ru')->delete();
        // создаём пользователя
        $ilon = User::create(
            [
                'name'              => 'Илон Масяськи',
                'email'             => 'rocketman@tesla.ru',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token'    => 'ololotrololo',
                'type_id'           => UserType::where('code', 'student')->first()->id,
            ]
        );

        \App\Models\City::where('id', '>', 0)->delete();
        // создаём Питер
        $piter = \App\Models\City::create(
            [
                'name'        => 'Санкт-Петербург',
                'coordinates' => '59.939095,30.315868',
            ]
        );

        \App\Models\University::where('id', '>', 0)->delete();
        // создаём Политех
        $politeh = University::create(
            [
                'name'    => 'Политех',
                'city_id' => $piter->id,
            ]
        );

        DB::table('user_universities')->truncate(); // пивотная таблица для компетенций тестов
        // устраиваем Илона в Политех
        DB::table('user_universities')->insert(
            [
                'university_id' => $politeh->id,
                'user_id'       => $ilon->id,
                'specialty'     => 'Инженер',
                'enter'         => Carbon::now(),
            ]
        );

        \App\Models\UserCompetence::where('id', '>', 0)->delete();
        // оцениваем Илона
        \App\Models\UserCompetence::create(
            [
                'user_id'       => $ilon->id,
                'competence_id' => $competence4->id,
                'progress'      => 90,
            ]
        );
        \App\Models\UserCompetence::create(
            [
                'user_id'       => $ilon->id,
                'competence_id' => $competence1->id,
                'progress'      => 50,
            ]
        );
        \App\Models\UserCompetence::create(
            [
                'user_id'       => $ilon->id,
                'competence_id' => $competence2->id,
                'progress'      => 70,
            ]
        );
    }
}
