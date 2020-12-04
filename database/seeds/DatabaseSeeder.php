<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);

        $this->call(UserTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        factory(\App\News::class,3)->create();

    }
}
