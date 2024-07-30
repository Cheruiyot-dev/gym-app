<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fitness_goals',
        'height',
        'weight',
        'age',
        'gender',
        'fitness_level',
        
       
        'preferred_workout_types',
        
    ];

    protected $casts = [
        'fitness_goals' => 'array',
        
        'preferred_workout_types' => 'array',
       
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
