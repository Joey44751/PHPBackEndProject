<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Price extends Model
{
    use HasFactory;
    // One price belongs to company = one to one relation
    public function company(){
        return $this->belongsTo(Company::class);
    }

}
