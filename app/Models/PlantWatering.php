<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantWatering extends Model
{
    use HasFactory;

    protected $fillable = ['time', 'status'];
}
