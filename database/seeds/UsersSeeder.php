<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        DB::table('role_user')->truncate();

        
        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>hash::make('password')  
        ]);
        $visiteur = User::create([
            'name'=>'visiteur',
            'email'=>'visiteur@visiteur.com',
            'password'=>hash::make('password')  
        ]);
        $acteur = User::create([
            'name'=>'acteur',
            'email'=>'acteur@acteur.com',
            'password'=>hash::make('password')  
        ]);
      $adminRole = Role::where('name','admin')->first();
      $visiteurRole = Role::where('name','admin')->first();
      $acteurRole = Role::where('name','admin')->first();

      $admin->roles()->attach($adminRole);
      $visiteur->roles()->attach($visiteurRole);
      $acteur->roles()->attach($acteurRole);
    }
    
}
