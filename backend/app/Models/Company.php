<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    use HasFactory;
    // needed to work with laravel and database
    protected $guarded = [];

    // One company has one size = one to one relation
    public function size(){
    return $this->hasOne(Size::class);
    }
    // One company has one price = one to one relation
    public function price(){
    return $this->hasOne(Price::class);
    }
    
}
