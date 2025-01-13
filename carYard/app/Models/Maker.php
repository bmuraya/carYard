<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel; // Alias the base Eloquent model
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Car;
use App\Models\CarModel; 

class Maker extends EloquentModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function CarModels(): HasMany // Rename the method
    {
        return $this->hasMany(CarModel::class); // Use a renamed class
    }
}
