<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Undocumented class
 * @property integer $owner_id
 * @property \Illuminate\Support\Carbon $created_at
 */
class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'owner_id',
        'name',
        'infomation',
        'filename',
        'is_selling'
    ];



    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
