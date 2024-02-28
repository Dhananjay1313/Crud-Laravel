<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'user_data';
    
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'contact_no',
    ];
}
