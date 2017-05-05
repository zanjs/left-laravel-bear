<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    public function categoryId(){
        return $this->belongsTo(PhotoCategory::class);
    }
}
