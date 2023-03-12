<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // To call post from Kategori 
    // access $Kategori->function_name
    use HasFactory;
    public function posts(){
        return $this->hasMany(posts::class);
    }
}
