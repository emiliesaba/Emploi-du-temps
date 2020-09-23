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
        $this->call(jourSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
