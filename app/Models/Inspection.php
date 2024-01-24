<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','firstname','lastname','email','phone','estate_id','estate','referee','inspection_date','inspection_time','ip_address'];
}
