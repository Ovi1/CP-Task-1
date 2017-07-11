<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $q_1 = array('dotted','inset','glazed','groove','solid');
        foreach ($q_1 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_2 = array('cm','dm','em','mm');
        foreach ($q_2 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_3 = array('.','*','#','em');
        foreach ($q_3 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_4 = array('display','visibility','width');
        foreach ($q_4 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_5 = array('olive','fuchsia','cyan','aqua','maroon');
        foreach ($q_5 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_6 = array('bold','oblique','600','thin');
        foreach ($q_6 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 6,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_7 = array('body .item div h2::first-letter:hover','#object h2:first-letter');
        foreach ($q_7 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 7,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_8 = array('content', 'padding', 'margin', 'outline', 'border');
        foreach ($q_8 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' => 8,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_9 = array('tv', 'all', 'voice', 'print', 'embossed');
        foreach ($q_9 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>9,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_10 = array('ch', 'turn', 'px', 'ems', 'dpcm','s', 'hz', 'rem');
        foreach ($q_10 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        //php
        $q_11 = array('The PHP configuration file, php.ini, is the final and most immediate way to affect PHPs functionality.', 'The php.ini file is read each time PHP is initialized.', 'Both of the above.');
        foreach ($q_11 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>11,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_12 = array('Variable names must begin with a letter or underscore character.', 'A variable name can consist of numbers, letters, underscores.', 'you cannot use characters like + , - , % , ( , ) . & , etc in a variable name.', 'All of the above.');
        foreach ($q_12 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>12,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        $q_13 = array('A variable that has been assigned NULL evaluates to FALSE in a Boolean context.', 'A variable that has been assigned NULL returns FALSE when tested with IsSet() function.', 'Both of the above.', 'Both of the above.');
        foreach ($q_13 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>13,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        $q_14 = array('Numeric Array', 'Associative Array', 'Multidimentional Array', 'None of the above.');
        foreach ($q_14 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>14,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_15 = array('$_PHP_SELF', '$SELF', '$PHP');
        foreach ($q_15 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>15,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        $q_16 = array('Using . operator.', 'Using + operator.', 'Using add() function', 'Using append() function');
        foreach ($q_16 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>16,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        $q_17 = array('setcookie() function', '$_COOKIE variable', 'isset() function', 'None of the above.');
        foreach ($q_17 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>17,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        $q_18 = array('$GLOBALS', '$_SERVER', '$_COOKIE', '$_SESSION');
        foreach ($q_18 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>18,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        $q_20 = array('mysql_connect()', 'mysql_query()', 'mysql_close()');
        foreach ($q_20 as $answer) {
            DB::table('answers')->insert([
                'answer' => $answer,
                'questions_id' =>20,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

    }
}
