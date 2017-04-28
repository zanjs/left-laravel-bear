<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    public function categoryId(){
        return $this->belongsTo(Category::class);
    }
}
