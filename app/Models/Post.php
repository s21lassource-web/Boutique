<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    // get all of the comments for the post 

    //@return \Illuminate\Database\Eloquent\Relations\HasMany
    
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
