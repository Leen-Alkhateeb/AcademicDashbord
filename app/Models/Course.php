<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'lecturer_id',
        'course_code',
        'title',
        'credit_hours',
        'semester',
    ];

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(Lecturer::class)->withTrashed();
    }

    
    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('enrollment_date', 'grade')
            ->withTimestamps();
    }
}