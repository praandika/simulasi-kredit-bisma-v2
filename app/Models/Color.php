<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;

class Color extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi to Unit
    public function unit(){
        return $this->hasMany(Unit::class);
    }
}
