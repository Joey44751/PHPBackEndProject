<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    // to be implemented, relations allready added
    // User can have many favorites = one to many relation
    public function company(){
        return $this->hasMany(Company::class);
    }
    // many favorites have one user = one to many relation
    public function user(){
        return $this->hasOne(User::class);
    }
}
