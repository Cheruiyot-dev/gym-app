<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * Find a role by its slug
     * 
     * @params string $slug
     * @return \App\Models\Role|null
     */
    public static function findBySlug( $slug)
    {
        return static::where('slug', $slug)->first();
    }

    /**
     * Check if the role has a specific slug.
     *
     * @param string $slug
     * @return bool
     */
    public function hasSlug($slug)
    {
        return $this->slug === $slug;
    }
}
