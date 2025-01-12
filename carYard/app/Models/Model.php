<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloguentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Model extends EloguentModel
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'maker_id'
    ];
        
}
