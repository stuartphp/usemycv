<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'title',
        'gender',
        'image',
        'ethnicity',
        'phone_number',
        'citizenship',
        'sa_id',
        'date_of_birth',
        'willing_to_relocate',
        'current_city',
        'is_disabled',
        'disabled_note',
        'highest_qualification',
        'allow_view',
        'introduction',
        'desired_job_location',
        'desired_job_title',
        'desired_job_category_id',
        'current_salary',
        'job_type',
        'notice_period',
        'is_available'
    ];
}
