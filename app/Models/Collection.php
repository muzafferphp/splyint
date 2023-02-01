<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
	
	public function Quotes()
    {
        return $this->hasMany(Quote::class,'collection_id');
    }
}
