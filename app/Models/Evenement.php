<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    /**
     * Get all of the Photos for the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * The Users that belong to the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Users()
    {
        return $this->belongsToMany(User::class)->withPivot('heure_passage');
    }

    /**
     * The Promotions that belong to the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Promotions()
    {
        return $this->belongsToMany(Promotion::class)->withPivot('heure_passage');
    }
}
