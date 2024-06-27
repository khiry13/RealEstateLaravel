<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function propertytype()
    {
        return $this->belongsTo(Propertytype::class, 'propertytype_id');
    }

    public function propertyimages()
    {
        return $this->hasMany(PropertyImage::class);
    }
}