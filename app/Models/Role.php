<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * The users that belong to the role
     */
    public function user() : HasOne
    
    {
        return $this->hasOne(User::class);
    }



   

   
}
