<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
    ];

    public function beers()
    {
        return $this->belongsToMany(Beer::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
