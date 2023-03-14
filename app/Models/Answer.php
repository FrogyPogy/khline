<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsTo(posts::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['jawaban', 'answered_at'];
}
