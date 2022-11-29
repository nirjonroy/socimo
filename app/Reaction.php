<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = [
        'userId', 'like', 'postId',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
