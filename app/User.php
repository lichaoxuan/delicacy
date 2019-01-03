<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //白名单：哪些字段允许添加
    protected $fillable = [
        'name', 'email', 'password',
    ];
    //黑名单：哪些用户不允许添加
    /*如下：
     * protected $guarded = ['id'];
     *
     * */
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
