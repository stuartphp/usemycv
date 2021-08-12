<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trading_name',
        'registered_as',
        'registration_number',
        'vat_number',
        'contact_name',
        'contact_number',
        'email',
        'physical_address',
        'postal_address',
        'slogan',
        'logo'
    ];
}
