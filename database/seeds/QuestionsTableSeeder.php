<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('questions')->insert([
            'title' => 'Which of the following is NOT a valid border-style property value?',
            'answer' => 'glazed',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //2
        DB::table('questions')->insert([
            'title' => 'Which of the following is NOT a valid CSS length unit?',
            'answer' => 'dm',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //3
        DB::table('questions')->insert([
            'title' => 'What is the CSS selector which allows you to target every element in a web page?',
            'answer' => '*',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //4
        DB::table('questions')->insert([
            'title' => 'Which CSS property allows you to hide an element but still maintain the space it occupies in the web page?',
            'answer' => 'visibility ',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //5
        DB::table('questions')->insert([
            'title' => 'There are 16 basic color keywords in CSS. Which of the following are NOT basic color keywords?',
            'answer' => 'cyan ',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //6
        DB::table('questions')->insert([
            'title' => 'The font-style CSS property has four different valid values. Three of these values are inherit, normal, and italic. What is one other valid value?',
            'answer' => 'oblique',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //7
        DB::table('questions')->insert([
            'title' => 'Which of the following two selectors has a higher CSS specificity?',
            'answer' => '#object h2::first-letter',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //8
        DB::table('questions')->insert([
            'title' => 'Which of the following CSS properties DOES NOT influence the box model?',
            'answer' => 'outline',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //9
        DB::table('questions')->insert([
            'title' => 'When using media queries, which of the following is NOT a valid media type?',
            'answer' => 'voice',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //10
        DB::table('questions')->insert([
            'title' => 'Which of the following is NOT a valid CSS unit?',
            'answer' => 'ems',
            'point' => 1,
            'surveys_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //php 11
        DB::table('questions')->insert([
            'title' => 'Which of the following is true about php.ini file?',
            'answer' => 'Both of the above.',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 12
        DB::table('questions')->insert([
            'title' => 'Which of the following is correct about variable naming rules?',
            'answer' => 'All of the above.',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 13
        DB::table('questions')->insert([
            'title' => 'Which of the following is correct about NULL?',
            'answer' => 'Both of the above.',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 14
        DB::table('questions')->insert([
            'title' => 'Which of the following array represents an array containing one or more arrays?',
            'answer' => 'Multidimentional Array',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 15
        DB::table('questions')->insert([
            'title' => 'Which of the following variable is used for the PHP script name?',
            'answer' => '$_PHP_SELF',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 16
        DB::table('questions')->insert([
            'title' => 'How will you concatenate two strings?',
            'answer' => 'Using . operator.',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 17
        DB::table('questions')->insert([
            'title' => 'Which of the following is used to delete a cookie?',
            'answer' => 'setcookie() function',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 18
        DB::table('questions')->insert([
            'title' => 'Which of the following is an array containing information such as headers, paths, and script locations?',
            'answer' => '$_SERVER',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //php 19
        DB::table('questions')->insert([
            'title' => 'Which of the following method of Exception class returns source line?',
            'answer' => 'getLine()',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //php 20
        DB::table('questions')->insert([
            'title' => 'Which of the following method can be used to create a MySql database using PHP?',
            'answer' => 'mysql_query()',
            'point' => 2,
            'surveys_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
