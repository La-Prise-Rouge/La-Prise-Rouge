<?php

namespace Database\Seeders;

use App\Models\Promotion;
use App\Models\Evenement;
use Illuminate\Database\Seeder;

class EvenementPromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //récupération des user
        $evenements = Evenement::all();
        //parcours pour chaque user dans la liste
        foreach ($evenements as $evenement) {
            //tant que l'utilisateur n'a pas 3 promotion
            while ($evenement->Promotions()->count() < 3) {
                //prendre le premier promotion aleatoire
                $promotion = Promotion::inRandomOrder()->first();
                //Si user est pas inscrit a promotion alors inscrire
                if ($evenement->Promotions()->find($promotion->id) == null) {
                    //generation d'un nombre aleatoire pour generer une date aléatoire
                    $int = mt_rand(1062044444,1262055681);
                    $random_date = date("Y-m-d H:i:s", $int);
                    //Affectation de promotion au user
                    $evenement->Promotions()->attach(
                        $promotion,
                        [
                            'heure_passage' => $random_date,
                        ]);
                }
            }
        }
    }
}
