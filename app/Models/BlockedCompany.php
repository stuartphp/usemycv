<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockedCompany extends Model
{
    use HasFactory;
    protected $fields = [
        'user_id',
        'company_id'
    ];
}
