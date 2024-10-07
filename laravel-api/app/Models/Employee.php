<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'employees';

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'age',
        'position',
    ];


}
