<?php

use Illuminate\Database\Seeder;
use App\Jour;
class jourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jour::truncate();
        $jours=[
            'lundi',
            'mardi',
            'mercredi',
            'jeudi',
            'vendredi',
            'samedi',
            'dimanche'
        ];
    foreach($jours as $jour){
        Jour::create(['nom'=>$jour
        ]);

    }
    }
}
