<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model{
    //
    use HasFactory;
    protected $fillable=["title", "description", "category", "due_date", "due_time"];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
