<?php

namespace App\QueryBuilders;

use App\Http\Requests\PostTagGetRequest;
use App\Models\PostTag;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class PostTagBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var PostTagGetRequest
     */
    protected $request;

    /**
     * PostTagBuilder constructor.
     *
     * @param PostTagGetRequest $request
     */
    public function __construct(PostTagGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(PostTag::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'post_tags.id',
            'post_tags.post_id',
            'post_tags.tag_id',
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
            'tag.id',
            'tag.name',
            'tag.deleted_at',
            'tag.created_at',
            'tag.updated_at',
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
            AllowedFilter::exact('tag_id'),
            AllowedFilter::exact('post_tags.id'),
            AllowedFilter::exact('post_tags.post_id'),
            AllowedFilter::exact('post_tags.tag_id'),
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
            AllowedFilter::exact('tag.id'),
            'tag.name',
            AllowedFilter::exact('tag.deleted_at'),
            AllowedFilter::exact('tag.created_at'),
            AllowedFilter::exact('tag.updated_at'),
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
            'tag',
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
            'post.title',
            'post.description',
            'post.content',
            'tag.name',
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
            'tag_id',
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
