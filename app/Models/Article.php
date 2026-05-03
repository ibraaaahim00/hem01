<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
 protected $fillable =[
     'title',
     'content',

 ];


    public function casts()
    {
        return [
        'is_active'
    ];
    }


    public function comments()
    {
return$this->hasmany(comments::class,'article_id');    }

}
