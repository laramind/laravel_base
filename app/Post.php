<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function getBody(){
        return Str::limit(strip_tags($this->body), 30);
    }
}
