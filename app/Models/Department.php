<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','reference','slug','name','description','status'];

    public function staff()
    {
        return $this->hasMany(User::class);
    }
}
