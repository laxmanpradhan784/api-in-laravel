<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; // Don't forget to include this if you want to use factories

    
    protected $fillable = ['name', 'email', 'age'];
}
