<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'tag',
        'description'
    ];
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function blog()
    {
        return $this->belongsTo(blog::class);
    }

}
