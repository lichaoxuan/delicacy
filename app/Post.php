<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded=['id','files'];


    //帖子和回复的关系 一对多
    public function replies(){
        return $this->hasMany('App\Reply');
    }
}

