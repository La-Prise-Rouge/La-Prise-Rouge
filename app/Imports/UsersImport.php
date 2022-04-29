<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Promotion;
use App\Models\Type;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class UsersImport implements ToModel
{

    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[1] == "NOM") {
            return null;
        }

        $type = Type::where("libelle", $row[3])->first();

        if ($type == null) {

            $type = new Type;
            $type->libelle = $row[3];
            $type->save();

        }

        $promotion = Promotion::where('annee', '=', now()->year)
                                ->where('type_id', '=', $type->id)
                                ->first();
        if ($promotion == null) {
            $promotion = new Promotion;
            $promotion->annee = now()->year;
            $promotion->type = 1;
            $promotion->type_id = $type->id;
            $promotion->save();
        }

        $user = User::where('email', '=', $row[4])->first();
        if ($user == null) {
            $user = new User;
            $user->name = $row[1];
            $user->email = $row[4];
            $user->admin = 0;
            $user->premiere_connexion = 0;
            $user->password = "password";
            $user->promotion_id = $promotion->id;

            return $user;
        }
        return null;
    }
}
