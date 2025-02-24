<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /** @use HasFactory<\Database\Factories\GroupFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function students(){
        return $this->belongsToMany(User::class,'group_student','group_id','student_id');
    }




}
