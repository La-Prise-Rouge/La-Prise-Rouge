<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    /**
     * Get all of the Users for the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * The Evenements that belong to the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Evenements()
    {
        return $this->belongsToMany(Evenement::class)->withPivot('heure_passage');
    }

    /**
     * Get the Type that owns the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
}
