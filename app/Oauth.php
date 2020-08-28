<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oauth extends Model
{
    protected $fillable = ['provider_id','user_id','provider'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
