<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
     public function likes(): BelongsTo
    {
        return $this->belongsTo(User::class);
        return $this->belongsTo(Post::class);
    }

}
