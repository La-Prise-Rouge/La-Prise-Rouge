<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * Get the Evenement that owns the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Evenement()
    {
        return $this->belongsTo(Evenement::class);
    }
}
