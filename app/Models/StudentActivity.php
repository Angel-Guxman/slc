<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentActivity extends Model
{
    use HasFactory;
    protected $table = 'students_has_activities';

  
    protected $fillable = ['students_id', 'activities_id','grade'];
}
