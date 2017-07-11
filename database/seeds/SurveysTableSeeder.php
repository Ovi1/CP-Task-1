<?php

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            'css',
            'php'
        );
        foreach ($types as $type) {
            DB::table('surveys')->insert([
                'type' => $type,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        };
    }
}
