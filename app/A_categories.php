<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_categories extends Model
{
    public function a_articles()
    {
    	return $this->belongsTo('App\A_articles');
    }
}
