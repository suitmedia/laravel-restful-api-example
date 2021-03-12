<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTagSaveRequest;
use App\Http\Resources\PostTagCollection;
use App\Http\Resources\PostTagResource;
use App\Models\PostTag;
use App\QueryBuilders\PostTagBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Post Tag Management
 *
 * API Endpoints for managing post tags.
 */
class PostTagsController extends Controller
{
    /**
     * Determine if any access to this resource require authorization.
     *
     * @var bool
     */
    protected static $requireAuthorization = true;

    /**
     * PostTagsController constructor.
     */
    public function __construct()
    {
        if (self::$requireAuthorization || (auth()->user() !== null)) {
            $this->authorizeResource(PostTag::class);
        }
    }

    /**
     * Resource Collection.
     * Display a collection of the post tag resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[post_tags] *string* - No-example
     * Comma-separated field/attribute names of the post_tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_id`, `tag_id`.
     * @queryParam fields[post] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[tag] *string* - No-example
     * Comma-separated field/attribute names of the tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `post`, `tag`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `post_id`, `tag_id`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `post_id`, `tag_id`, `post.id`, `post.post_category_id`, `post.admin_id`, `post.title`, `post.description`, `post.content`, `post.published`, `post.deleted_at`, `post.created_at`, `post.updated_at`, `tag.id`, `tag.name`, `tag.deleted_at`, `tag.created_at`, `tag.updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\PostTagBuilder $query
     *
     * @return PostTagCollection
     */
    public function index(PostTagBuilder $query): PostTagCollection
    {
        return new PostTagCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new post tag resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\PostTagSaveRequest $request
     * @param \App\Models\PostTag $postTag
     *
     * @return JsonResponse
     */
    public function store(PostTagSaveRequest $request, PostTag $postTag): JsonResponse
    {
        $postTag->fill($request->only($postTag->offsetGet('fillable')))
            ->save();

        $resource = (new PostTagResource($postTag))
            ->additional(['info' => 'The new post tag has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific post tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postTag required *integer* - No-example
     * The identifier of a specific post tag resource.
     *
     * @queryParam fields[post_tags] *string* - No-example
     * Comma-separated field/attribute names of the post_tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_id`, `tag_id`.
     * @queryParam fields[post] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[tag] *string* - No-example
     * Comma-separated field/attribute names of the tag resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `post`, `tag`.
     *
     * @param \App\QueryBuilders\PostTagBuilder $query
     * @param \App\Models\PostTag $postTag
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return PostTagResource
     */
    public function show(PostTagBuilder $query, PostTag $postTag): PostTagResource
    {
        return new PostTagResource($query->find($postTag->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific post tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postTag required *integer* - No-example
     * The identifier of a specific post tag resource.
     *
     * @param \App\Http\Requests\PostTagSaveRequest $request
     * @param \App\Models\PostTag $postTag
     *
     * @return PostTagResource
     */
    public function update(PostTagSaveRequest $request, PostTag $postTag): PostTagResource
    {
        $postTag->fill($request->only($postTag->offsetGet('fillable')));

        if ($postTag->isDirty()) {
            $postTag->save();
        }

        return (new PostTagResource($postTag))
            ->additional(['info' => 'The post tag has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific post tag resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam postTag required *integer* - No-example
     * The identifier of a specific post tag resource.
     *
     * @param \App\Models\PostTag $postTag
     *
     * @throws \Exception
     *
     * @return PostTagResource
     */
    public function destroy(PostTag $postTag): PostTagResource
    {
        $postTag->delete();

        return (new PostTagResource($postTag))
            ->additional(['info' => 'The post tag has been deleted.']);
    }
}
