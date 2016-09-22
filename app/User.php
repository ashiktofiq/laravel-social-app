<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;

class User extends Model implements Authenticatable
{   
    use \Illuminate\Auth\Authenticatable;
    
     public function posts()
    {
        return $this->hasMany('App\Post');
    }

    //protected $table = 'users';
    
   // protected $fillable = [
       // 'email','first_name', 'password'
   // ];
    
}
