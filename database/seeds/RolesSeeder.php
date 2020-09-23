<?php
Use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'visiteur']);
        Role::create(['name'=>'acteur']);
    }
}
