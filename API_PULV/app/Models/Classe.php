<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class);
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
        'name',
        'promotion',
    ];
}
