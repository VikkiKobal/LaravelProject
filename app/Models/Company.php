<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Вказуємо, які поля можна масово заповнювати (Mass Assignable)
    protected $fillable = [
        'code',
        'name',
        'employees',
        'industry',
        'address',
    ];
}
