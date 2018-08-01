<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KidsImages extends Model
{
	protected $table = 'kidsimages';
    //
     public function kidsimages()
    {
        return $this->hasMany(KidsImages::class);
    }
}
