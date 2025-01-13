<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RelatedModel;


class Constituencies extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'county_id'
    ];


    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
