<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainerProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bio',
        'specializations',
        'certifications',
        'experience',
        'location',
       
        'hourly_rate',
        'availability_schedule',
      
        'sample_workout_plans',
        'social_media_links',
    ];

    protected $casts = [
        'specializations' => 'array',
        'certifications' => 'array',
        'availability_schedule' => 'array',
       
        'sample_workout_plans' => 'array',
        'social_media_links' => 'array',
    ];

    public function user(): BelongsTo

    
    {
        return $this->belongsTo(User::class);
    }
}
