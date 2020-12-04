<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Models\Role::create([
            'name' => 'admin',
            'display_name'=> 'Super admin',
            'description' => 'control any thing'
        ]);

        $data = \App\Models\Role::create([
            'name' => 'user',
            'display_name'=> 'user',
            'description' => 'Specific Task'
        ]);
        $data = \App\Models\Role::create([
            'name' => 'editor',
            'display_name'=> 'editor',
            'description' => 'Specific Task'
        ]);

        $data = \App\Models\Role::create([
            'name' => 'writer ',
            'display_name'=> 'writer',
            'description' => 'Specific Task'
        ]);

        $data = \App\Models\Role::create([
            'name' => 'supervisor ',
            'display_name'=> 'supervisor',
            'description' => 'Specific Task'
        ]);
        //
    }
}
