<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //fillable fields fillable icon name 
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
    ];
    //liaison avec products
    public function products():HasMany
    {
        return $this->hasMany(products::class);
    }
}
