<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;


class CarImage extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'image_path',
        'position',
    ];
  

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
