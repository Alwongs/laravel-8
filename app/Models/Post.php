<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post', 'description', 'image', 'likes', 'user_id'];

    public function user() 
    {
        return $this->BelongsTo(User::class);
    }
}
