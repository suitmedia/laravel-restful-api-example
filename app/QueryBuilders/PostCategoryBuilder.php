<?php

namespace App\QueryBuilders;

use App\Http\Requests\PostCategoryGetRequest;
use App\Models\PostCategory;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class PostCategoryBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var PostCategoryGetRequest
     */
    protected $request;

    /**
     * PostCategoryBuilder constructor.
     *
     * @param PostCategoryGetRequest $request
     */
    public function __construct(PostCategoryGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(PostCategory::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'post_categories.id',
            'post_categories.name',
            'post_categories.deleted_at',
            'post_categories.created_at',
            'post_categories.updated_at',
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
            'name',
            AllowedFilter::exact('deleted_at'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('post_categories.id'),
            'post_categories.name',
            AllowedFilter::exact('post_categories.deleted_at'),
            AllowedFilter::exact('post_categories.created_at'),
            AllowedFilter::exact('post_categories.updated_at'),
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
            'posts',
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
            'name',
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
            'name',
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
