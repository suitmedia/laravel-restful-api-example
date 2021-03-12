<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagSaveRequest;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\QueryBuilders\TagBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Tag Management
 *
 * API Endpoints for managing tags.
 */
class TagsController extends Controller
{
    /**
     * Determine if any access to this resource require authorization.
     *
     * @var bool
     */
    protected static $requireAuthorization = true;

    /**
     * TagsController constructor.
     */
    public function __construct()
    {
        if (self::$requireAuthorization || (auth()->user() !== null)) {
            $this->authorizeResource(Tag::class);
        }
    }

    /**
     * Resource Collection.
     * Display a collection of the tag resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[tags] *string* - No-example
     * Comma-separated field/attribute names of the tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `postTags`, `posts`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\TagBuilder $query
     *
     * @return TagCollection
     */
    public function index(TagBuilder $query): TagCollection
    {
        return new TagCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new tag resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\TagSaveRequest $request
     * @param \App\Models\Tag $tag
     *
     * @return JsonResponse
     */
    public function store(TagSaveRequest $request, Tag $tag): JsonResponse
    {
        $tag->fill($request->only($tag->offsetGet('fillable')))
            ->save();

        $resource = (new TagResource($tag))
            ->additional(['info' => 'The new tag has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam tag required *integer* - No-example
     * The identifier of a specific tag resource.
     *
     * @queryParam fields[tags] *string* - No-example
     * Comma-separated field/attribute names of the tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `postTags`, `posts`.
     *
     * @param \App\QueryBuilders\TagBuilder $query
     * @param \App\Models\Tag $tag
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return TagResource
     */
    public function show(TagBuilder $query, Tag $tag): TagResource
    {
        return new TagResource($query->find($tag->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam tag required *integer* - No-example
     * The identifier of a specific tag resource.
     *
     * @param \App\Http\Requests\TagSaveRequest $request
     * @param \App\Models\Tag $tag
     *
     * @return TagResource
     */
    public function update(TagSaveRequest $request, Tag $tag): TagResource
    {
        $tag->fill($request->only($tag->offsetGet('fillable')));

        if ($tag->isDirty()) {
            $tag->save();
        }

        return (new TagResource($tag))
            ->additional(['info' => 'The tag has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam tag required *integer* - No-example
     * The identifier of a specific tag resource.
     *
     * @param \App\Models\Tag $tag
     *
     * @throws \Exception
     *
     * @return TagResource
     */
    public function destroy(Tag $tag): TagResource
    {
        $tag->delete();

        return (new TagResource($tag))
            ->additional(['info' => 'The tag has been deleted.']);
    }
}
