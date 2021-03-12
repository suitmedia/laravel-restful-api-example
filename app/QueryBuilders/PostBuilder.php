<?php

namespace App\QueryBuilders;

use App\Http\Requests\PostGetRequest;
use App\Models\Post;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class PostBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var PostGetRequest
     */
    protected $request;

    /**
     * PostBuilder constructor.
     *
     * @param PostGetRequest $request
     */
    public function __construct(PostGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Post::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'posts.id',
            'posts.post_category_id',
            'posts.admin_id',
            'posts.title',
            'posts.description',
            'posts.content',
            'posts.published',
            'posts.deleted_at',
            'posts.created_at',
            'posts.updated_at',
            'postCategory.id',
            'postCategory.name',
            'postCategory.deleted_at',
            'postCategory.created_at',
            'postCategory.updated_at',
            'admin.id',
            'admin.name',
            'admin.email',
            'admin.password',
            'admin.deleted_at',
            'admin.created_at',
            'admin.updated_at',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any filter operations.
     *
     * @return array
     */
    protected function getAllowedFilters(): array
    {
        return [
            AllowedFilter::exact('id'),
            AllowedFilter::exact('post_category_id'),
            AllowedFilter::exact('admin_id'),
            'title',
            'description',
            'content',
            AllowedFilter::exact('published'),
            AllowedFilter::exact('deleted_at'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('posts.id'),
            AllowedFilter::exact('posts.post_category_id'),
            AllowedFilter::exact('posts.admin_id'),
            'posts.title',
            'posts.description',
            'posts.content',
            AllowedFilter::exact('posts.published'),
            AllowedFilter::exact('posts.deleted_at'),
            AllowedFilter::exact('posts.created_at'),
            AllowedFilter::exact('posts.updated_at'),
            AllowedFilter::exact('postCategory.id'),
            'postCategory.name',
            AllowedFilter::exact('postCategory.deleted_at'),
            AllowedFilter::exact('postCategory.created_at'),
            AllowedFilter::exact('postCategory.updated_at'),
            AllowedFilter::exact('admin.id'),
            'admin.name',
            'admin.email',
            'admin.password',
            AllowedFilter::exact('admin.deleted_at'),
            AllowedFilter::exact('admin.created_at'),
            AllowedFilter::exact('admin.updated_at'),
        ];
    }

    /**
     * Get a list of allowed relationships that can be used in any include operations.
     *
     * @return string[]
     */
    protected function getAllowedIncludes(): array
    {
        return [
            'postCategory',
            'admin',
            'comments',
            'postTags',
            'tags',
        ];
    }

    /**
     * Get a list of allowed searchable columns which can be used in any search operations.
     *
     * @return string[]
     */
    protected function getAllowedSearch(): array
    {
        return [
            'title',
            'description',
            'content',
            'postCategory.name',
            'admin.name',
            'admin.email',
            'admin.password',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any sort operations.
     *
     * @return string[]
     */
    protected function getAllowedSorts(): array
    {
        return [
            'id',
            'post_category_id',
            'admin_id',
            'title',
            'description',
            'content',
            'published',
            'deleted_at',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get the default sort column that will be used in any sort operation.
     *
     * @return string
     */
    protected function getDefaultSort(): string
    {
        return 'id';
    }
}
