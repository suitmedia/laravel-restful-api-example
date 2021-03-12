<?php

namespace App\QueryBuilders;

use App\Http\Requests\CommentGetRequest;
use App\Models\Comment;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class CommentBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var CommentGetRequest
     */
    protected $request;

    /**
     * CommentBuilder constructor.
     *
     * @param CommentGetRequest $request
     */
    public function __construct(CommentGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Comment::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'comments.id',
            'comments.post_id',
            'comments.user_id',
            'comments.content',
            'comments.published',
            'comments.deleted_at',
            'comments.created_at',
            'comments.updated_at',
            'post.id',
            'post.post_category_id',
            'post.admin_id',
            'post.title',
            'post.description',
            'post.content',
            'post.published',
            'post.deleted_at',
            'post.created_at',
            'post.updated_at',
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
            AllowedFilter::exact('post_id'),
            AllowedFilter::exact('user_id'),
            'content',
            AllowedFilter::exact('published'),
            AllowedFilter::exact('deleted_at'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('comments.id'),
            AllowedFilter::exact('comments.post_id'),
            AllowedFilter::exact('comments.user_id'),
            'comments.content',
            AllowedFilter::exact('comments.published'),
            AllowedFilter::exact('comments.deleted_at'),
            AllowedFilter::exact('comments.created_at'),
            AllowedFilter::exact('comments.updated_at'),
            AllowedFilter::exact('post.id'),
            AllowedFilter::exact('post.post_category_id'),
            AllowedFilter::exact('post.admin_id'),
            'post.title',
            'post.description',
            'post.content',
            AllowedFilter::exact('post.published'),
            AllowedFilter::exact('post.deleted_at'),
            AllowedFilter::exact('post.created_at'),
            AllowedFilter::exact('post.updated_at'),
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
            'post',
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
            'content',
            'post.title',
            'post.description',
            'post.content',
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
            'post_id',
            'user_id',
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
