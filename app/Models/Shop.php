<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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



    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
