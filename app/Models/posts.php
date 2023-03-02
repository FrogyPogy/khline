<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    
    // To call one answer from post 
    // access $posts->function_name
    public function answer(){
        return $this->hasOne(Answer::class);
    }
}
