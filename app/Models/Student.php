<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
    'name_student', 
    'lastname_student', 
    'id_student',
    'email_student',
    'password_student',
    'comments',];

    public function activities():BelongsToMany {
        return $this->belongsToMany(Activity::class, 'students_has_activities', 'students_id', 'activities_id');
    }
}
