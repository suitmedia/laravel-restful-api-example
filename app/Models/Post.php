<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Tag;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use CascadeSoftDeletes;
    use HasFactory;
    use SoftDeletes;

    /**
     * A collection of model relationships for cascading soft deletes automatically.
     *
     * @var string[]
     */
    protected $cascadeDeletes = [
        'comments',
        'postTags',
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
        'post_category_id',
        'admin_id',
        'title',
        'description',
        'content',
        'published',
    ];

    /**
     * Model relationship definition.
     * Post belongs to Admin
     *
     * @return BelongsTo
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    /**
     * Model relationship definition.
     * Post has many Comments
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    /**
     * Model relationship definition.
     * Post belongs to PostCategory
     *
     * @return BelongsTo
     */
    public function postCategory(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class);
    }

    /**
     * Model relationship definition.
     * Post has many PostTags
     *
     * @return HasMany
     */
    public function postTags(): HasMany
    {
        return $this->hasMany(PostTag::class, 'post_id');
    }

    /**
     * Model relationship definition.
     * Post belongs to many Tags
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
