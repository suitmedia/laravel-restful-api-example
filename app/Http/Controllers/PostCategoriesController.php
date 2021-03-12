<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCategorySaveRequest;
use App\Http\Resources\PostCategoryCollection;
use App\Http\Resources\PostCategoryResource;
use App\Models\PostCategory;
use App\QueryBuilders\PostCategoryBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Post Category Management
 *
 * API Endpoints for managing post categories.
 */
class PostCategoriesController extends Controller
{
    /**
     * Determine if any access to this resource require authorization.
     *
     * @var bool
     */
    protected static $requireAuthorization = false;

    /**
     * PostCategoriesController constructor.
     */
    public function __construct()
    {
        if (self::$requireAuthorization || (auth()->user() !== null)) {
            $this->authorizeResource(PostCategory::class);
        }
    }

    /**
     * Resource Collection.
     * Display a collection of the post category resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[post_categories] *string* - No-example
     * Comma-separated field/attribute names of the post_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `posts`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\PostCategoryBuilder $query
     *
     * @return PostCategoryCollection
     */
    public function index(PostCategoryBuilder $query): PostCategoryCollection
    {
        return new PostCategoryCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new post category resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\PostCategorySaveRequest $request
     * @param \App\Models\PostCategory $postCategory
     *
     * @return JsonResponse
     */
    public function store(PostCategorySaveRequest $request, PostCategory $postCategory): JsonResponse
    {
        $postCategory->fill($request->only($postCategory->offsetGet('fillable')))
            ->save();

        $resource = (new PostCategoryResource($postCategory))
            ->additional(['info' => 'The new post category has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific post category resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postCategory required *integer* - No-example
     * The identifier of a specific post category resource.
     *
     * @queryParam fields[post_categories] *string* - No-example
     * Comma-separated field/attribute names of the post_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `posts`.
     *
     * @param \App\QueryBuilders\PostCategoryBuilder $query
     * @param \App\Models\PostCategory $postCategory
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return PostCategoryResource
     */
    public function show(PostCategoryBuilder $query, PostCategory $postCategory): PostCategoryResource
    {
        return new PostCategoryResource($query->find($postCategory->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific post category resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postCategory required *integer* - No-example
     * The identifier of a specific post category resource.
     *
     * @param \App\Http\Requests\PostCategorySaveRequest $request
     * @param \App\Models\PostCategory $postCategory
     *
     * @return PostCategoryResource
     */
    public function update(PostCategorySaveRequest $request, PostCategory $postCategory): PostCategoryResource
    {
        $postCategory->fill($request->only($postCategory->offsetGet('fillable')));

        if ($postCategory->isDirty()) {
            $postCategory->save();
        }

        return (new PostCategoryResource($postCategory))
            ->additional(['info' => 'The post category has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific post category resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postCategory required *integer* - No-example
     * The identifier of a specific post category resource.
     *
     * @param \App\Models\PostCategory $postCategory
     *
     * @throws \Exception
     *
     * @return PostCategoryResource
     */
    public function destroy(PostCategory $postCategory): PostCategoryResource
    {
        $postCategory->delete();

        return (new PostCategoryResource($postCategory))
            ->additional(['info' => 'The post category has been deleted.']);
    }
}
