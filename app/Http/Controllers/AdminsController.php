<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminSaveRequest;
use App\Http\Resources\AdminCollection;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use App\QueryBuilders\AdminBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Admin Management
 *
 * API Endpoints for managing admins.
 */
class AdminsController extends Controller
{
    /**
     * AdminsController constructor.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->authorize('viewAny', Admin::class);

            return $next($request);
        });
    }

    /**
     * Resource Collection.
     * Display a collection of the admin resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[admins] *string* - No-example
     * Comma-separated field/attribute names of the admin resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `posts`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\AdminBuilder $query
     *
     * @return AdminCollection
     */
    public function index(AdminBuilder $query): AdminCollection
    {
        return new AdminCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new admin resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\AdminSaveRequest $request
     * @param \App\Models\Admin $admin
     *
     * @return JsonResponse
     */
    public function store(AdminSaveRequest $request, Admin $admin): JsonResponse
    {
        $admin->fill($request->only($admin->offsetGet('fillable')))
            ->save();

        $resource = (new AdminResource($admin))
            ->additional(['info' => 'The new admin has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific admin resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam admin required *integer* - No-example
     * The identifier of a specific admin resource.
     *
     * @queryParam fields[admins] *string* - No-example
     * Comma-separated field/attribute names of the admin resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `posts`.
     *
     * @param \App\QueryBuilders\AdminBuilder $query
     * @param \App\Models\Admin $admin
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return AdminResource
     */
    public function show(AdminBuilder $query, Admin $admin): AdminResource
    {
        return new AdminResource($query->find($admin->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific admin resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam admin required *integer* - No-example
     * The identifier of a specific admin resource.
     *
     * @param \App\Http\Requests\AdminSaveRequest $request
     * @param \App\Models\Admin $admin
     *
     * @return AdminResource
     */
    public function update(AdminSaveRequest $request, Admin $admin): AdminResource
    {
        $admin->fill($request->only($admin->offsetGet('fillable')));

        if ($admin->isDirty()) {
            $admin->save();
        }

        return (new AdminResource($admin))
            ->additional(['info' => 'The admin has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific admin resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam admin required *integer* - No-example
     * The identifier of a specific admin resource.
     *
     * @param \App\Models\Admin $admin
     *
     * @throws \Exception
     *
     * @return AdminResource
     */
    public function destroy(Admin $admin): AdminResource
    {
        $admin->delete();

        return (new AdminResource($admin))
            ->additional(['info' => 'The admin has been deleted.']);
    }
}
