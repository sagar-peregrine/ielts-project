<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCalendar extends Model
{
    use HasFactory;

    protected $table = 'course_calendar';

    protected $fillable = [
        'course_name',
        'day',
        'time',
        'location',
        'instructor',
        'status',
        'description',
        'course_code',
        'course_type',
        'course_duration',
        'course_fee',
        'course_image',
        'course_link'
    ];
}
