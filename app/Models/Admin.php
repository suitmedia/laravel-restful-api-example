<?php

namespace App\Models;

use App\Models\Post;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use CascadeSoftDeletes;
    use HasFactory;
    use HasApiTokens;
    use SoftDeletes;
    use Notifiable;

    const ROLE_SUPERADMIN = 'superadmin';
    const ROLE_EDITOR = 'editor';

    /**
     * A collection of model relationships for cascading soft deletes automatically.
     *
     * @var string[]
     */
    protected $cascadeDeletes = [
        'posts',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var string[]
     */
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Model relationship definition.
     * Admin has many Posts
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'admin_id');
    }

    /**
     * Check if admin has a superadmin role.
     *
     * @return Boolean
     */
    public function isSuperAdmin()
    {
        return $this->role == self::ROLE_SUPERADMIN;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
