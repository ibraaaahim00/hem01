<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected$fillable=[
        'article_id',
        'comment',

    ];


    public function articles()
    {
        return $this->belongsto(article::class.'article_id','id');
}




}

