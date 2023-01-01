<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    protected $fillable = [ 

        
    'pet_name','powrent','breed','gender',
    'date_of_birth','contact_phone','address',
    'status'
    ];
}
