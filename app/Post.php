<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    protected $table = 'posts';
    
    protected $fillable = [
       'body'
    ];
}
