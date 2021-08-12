<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'graduation_year',
        'institution',
        'field_of_study',
        'qualification',
        'file'
    ];
}
