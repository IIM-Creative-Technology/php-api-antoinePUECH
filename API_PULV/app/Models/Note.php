<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'note',
        'student_id',
        'subject_id',
    ];
}
