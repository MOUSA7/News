<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = ['منوعات','أقتصاد','السياسة','الرياضة','التعليم','العالم'];

        foreach ($sections as $section){
           \App\Section::create(['name'=>$section]);
        }
        //
    }
}
