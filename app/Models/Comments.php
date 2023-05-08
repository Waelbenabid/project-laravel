<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['comment'];

    public function add()
    {
        // $comments = Posts::find(1)->comments;
        // foreach ($comments as $comment) {
        //     //
        // }
    }
    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
    public function user()
    {
        return $this->belongsTo(Comments::class);
    }
}
