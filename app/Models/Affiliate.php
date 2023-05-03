<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','reference','name','description','website','phones','phones->phone1','phones->phone2','logo','art_design','social'];
}
