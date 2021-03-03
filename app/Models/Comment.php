<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function commentable(){
        return $this->morphTo();
=======
    public function post()
    {
        return $this->belongsTo(Post::class);
>>>>>>> 419428a4b9c34aa31d2e6e4004adc687db630fda
    }
}
