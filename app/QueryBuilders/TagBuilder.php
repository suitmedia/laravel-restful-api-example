<?php

namespace App\QueryBuilders;

use App\Http\Requests\TagGetRequest;
use App\Models\Tag;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class TagBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var TagGetRequest
     */
    protected $request;

    /**
     * TagBuilder constructor.
     *
     * @param TagGetRequest $request
     */
    public function __construct(TagGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Tag::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'tags.id',
            'tags.name',
            'tags.deleted_at',
            'tags.created_at',
            'tags.updated_at',
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
            AllowedFilter::exact('tags.id'),
            'tags.name',
            AllowedFilter::exact('tags.deleted_at'),
            AllowedFilter::exact('tags.created_at'),
            AllowedFilter::exact('tags.updated_at'),
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
            'postTags',
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
