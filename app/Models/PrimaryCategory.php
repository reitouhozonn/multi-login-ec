<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrimaryCategory extends Model
{
    use HasFactory;

    /**
     * Get all of the secondary for the PrimaryCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function secondary(): HasMany
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}
