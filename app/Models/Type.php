<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * Get all of the Users for the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
