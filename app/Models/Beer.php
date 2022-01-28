<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Beer extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        'name',
        'type',
        'alcohol_percentage' ,
        'year' ,
        'country',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function bars()
    {
        return $this->belongsToMany(Bar::class);
    }
}
