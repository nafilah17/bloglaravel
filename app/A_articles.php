<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_articles extends Model
{
    public function a_categories()
    {
    	return $this->hasOne('App\A_categories');
    }
}
