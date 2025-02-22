<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];


    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
    public function teachers(){
        return $this->belongsToMany(User::class,'group_teachers','group_id','teacher_id');
    }
}
