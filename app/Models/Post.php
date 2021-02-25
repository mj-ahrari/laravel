<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Address;
class Post extends Model
{
    use HasFactory;
    public function scopeActive($query, $par)
    {
        return $query->where('status', $par);
    }
    public function addresses(){
        return $this->hasMany(Address::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
