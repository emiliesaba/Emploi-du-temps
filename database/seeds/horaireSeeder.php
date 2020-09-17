<?php

use Illuminate\Database\Seeder;
use App\Horaire;
class horaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horaire::truncate();
        $horaires=[
            '08:00-09:00',
            '09:00-10:00',
            '10:00-11:00',
            '11:00-12:00',
            '12:00-13:00',
            '13:00-14:00',
            '14:00-15:00',
            '15:00-16:00',
            '16:00-17:00',
            '17:00-18:00'
        ];
    foreach($jours as $jour){
        Jour::create(['heure'=>$jour
        ]);

    }
    }
}
