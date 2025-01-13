<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class County extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'county';

    protected $fillable = [
        'name'
    ];

    
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    
    public function constituencies(): HasMany
    {
        return $this->hasMany(Constituencies::class);
    }
}
