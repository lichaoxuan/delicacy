<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post_user;

class Post extends Model
{
    //
    protected $guarded=['id','files'];


    public function isfollowed(){
        return (bool) Post_user::where('user_id', \Auth::id())
            ->where('post_id', $this->id)
            ->first();
    }

    //帖子和回复的关系 一对多
    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
