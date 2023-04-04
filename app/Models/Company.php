<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','website','logo','password'];
    protected $hidden = ['password'];
    protected $dates = ['deleted_at'];

    public function jobs() {
        return $this->hasMany('App\Job');
    }

}
