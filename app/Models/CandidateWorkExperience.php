<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateWorkExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_title',
        'company_name',
        'start',
        'end',
        'is_current',
        'industry_id',
        'job_category_id',
        'job_sub_category',
        'responsibilities',
        'reason_for_leaving',
    ];
}
