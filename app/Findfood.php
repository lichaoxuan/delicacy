<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Findfood extends Model
{
    //
    protected $table="findfoods";
    protected $guarded=["id"];

    public function type(){
        return $this->belongsTo("App\Type");
    }

}
