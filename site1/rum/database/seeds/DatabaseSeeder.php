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
        // $this->call(UserSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(LevelTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(WorksOnTableSeeder::class);
        $this->call(WorksHourTableSeeder::class);
    }
}
