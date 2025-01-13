<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    /**
     * Define the relationship with the Car model.
     * A CarType can have many Cars.
     */
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
