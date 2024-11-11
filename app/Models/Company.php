<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'employees',
        'industry',
        'address',
        'creator_user_id',  // Додайте це поле до масиву fillable
    ];

    /**
     * Зв'язок із користувачем, який створив компанію.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_user_id');
    }
}

