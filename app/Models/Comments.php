<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected$fillable=[
        'article_id',
        'comment',
        'name',

    ];


    public function articles()
    {
        return $this->belongsto(article::class.'article_id','id');
}




}

