<?php

namespace Database\Seeders;

use App\Models\Evenement;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\Exists;

class EvenementUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //récupération des user
        $users = User::all();
        //parcours pour chaque user dans la liste
        foreach ($users as $user) {
            //tant que l'utilisateur n'a pas 3 evenements
            while ($user->Evenements()->count() < 3) {
                //prendre le premier evenement aleatoire
                $evenement = Evenement::inRandomOrder()->first();
                //Si user est pas inscrit a l'evenement alors inscrire
                if ($user->Evenements()->find($evenement->id) == null) {
                    //generation d'un nombre aleatoire pour generer une date aléatoire
                    $int = mt_rand(1062044444,1262055681);
                    $random_date = date("Y-m-d H:i:s", $int);
                    //Affectation de l'evenement au user
                    $user->Evenements()->attach(
                        $evenement,
                        [
                            'heure_passage' => $random_date,
                            'est_passe' => false
                        ]);
                }
            }
        }
    }
}
