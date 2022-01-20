<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SecondaryCategory extends Model
{
    use HasFactory;

    /**
     * Get the primary that owns the SecondaryCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function primary(): BelongsTo
    {
        return $this->belongsTo(PrimaryCategory::class);
    }
}
