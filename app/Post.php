<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $rules = [
        'name_video' => 'required|string|max:25|unique:posts',
        "video" => "required|string|max:50|unique:posts"
    ];
    
}
