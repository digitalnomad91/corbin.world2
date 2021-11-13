<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Author() {
    	$this->belongsTo("App\Author");
    }
}
