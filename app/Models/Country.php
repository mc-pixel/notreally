<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function beers()
    {
        return $this->hasMany(Beer::class);
    }
    public function bars()
    {
        return $this->hasMany(Bar::class);
    }
}
