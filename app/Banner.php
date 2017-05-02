<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Banner extends Model
{
    public function categoryId(){
        return $this->belongsTo(BannerCategory::class);
    }
}
