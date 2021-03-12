<?php

namespace App\QueryBuilders;

use App\Http\Requests\AdminGetRequest;
use App\Models\Admin;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class AdminBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var AdminGetRequest
     */
    protected $request;

    /**
     * AdminBuilder constructor.
     *
     * @param AdminGetRequest $request
     */
    public function __construct(AdminGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Admin::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'admins.id',
            'admins.name',
            'admins.email',
            'admins.password',
            'admins.role',
            'admins.deleted_at',
            'admins.created_at',
            'admins.updated_at',
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
            'email',
            'password',
            'role',
            AllowedFilter::exact('deleted_at'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('admins.id'),
            'admins.name',
            'admins.email',
            'admins.password',
            'admins.role',
            AllowedFilter::exact('admins.deleted_at'),
            AllowedFilter::exact('admins.created_at'),
            AllowedFilter::exact('admins.updated_at'),
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
            'email',
            'password',
            'role',
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
            'email',
            'password',
            'role',
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
