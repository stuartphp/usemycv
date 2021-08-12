<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateCv extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_name',
        'file',
        'is_main_cv',
    ];
}
