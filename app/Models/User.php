<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class User extends Model
{
    use HasFactory;
    // public function roles(){
    //     return $this->belongsToMany(Role::class);
    // }
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
