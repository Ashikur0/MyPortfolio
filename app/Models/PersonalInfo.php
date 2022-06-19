<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    Protected $fillable =['name','designation','company','email','contact','facebook','linkdin','image'];  
}
