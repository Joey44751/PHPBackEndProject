<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{

protected $guarded = [];
    
    use HasFactory;

public function size(){
    return $this->hasOne(Size::class);
}

public function price(){
    return $this->hasOne(Price::class);
}
    
}