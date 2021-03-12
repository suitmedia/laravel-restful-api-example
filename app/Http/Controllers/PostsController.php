<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostSaveRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\QueryBuilders\PostBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Post Management
 *
 * API Endpoints for managing posts.
 */
class PostsController extends Controller
{
    /**
     * Determine if any access to this resource require authorization.
     *
     * @var bool
     */
    protected static $requireAuthorization = false;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        if (self::$requireAuthorization || (auth()->user() !== null)) {
            $this->authorizeResource(Post::class);
        }
    }

    /**
     * Resource Collection.
     * Display a collection of the post resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[posts] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[postCategory] *string* - No-example
     * Comma-separated field/attribute names of the post_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[admin] *string* - No-example
     * Comma-separated field/attribute names of the admin resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `postCategory`, `admin`, `comments`, `postTags`, `tags`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`, `postCategory.id`, `postCategory.name`, `postCategory.deleted_at`, `postCategory.created_at`, `postCategory.updated_at`, `admin.id`, `admin.name`, `admin.email`, `admin.password`, `admin.deleted_at`, `admin.created_at`, `admin.updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\PostBuilder $query
     *
     * @return PostCollection
     */
    public function index(PostBuilder $query): PostCollection
    {
        return new PostCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new post resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\PostSaveRequest $request
     * @param \App\Models\Post $post
     *
     * @return JsonResponse
     */
    public function store(PostSaveRequest $request, Post $post): JsonResponse
    {
        $data = $request->only($post->offsetGet('fillable'));
        $data['admin_id'] = \Auth::user()->id;

        $post->fill($data)
            ->save();

        $resource = (new PostResource($post))
            ->additional(['info' => 'The new post has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific post resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam post required *integer* - No-example
     * The identifier of a specific post resource.
     *
     * @queryParam fields[posts] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[postCategory] *string* - No-example
     * Comma-separated field/attribute names of the post_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[admin] *string* - No-example
     * Comma-separated field/attribute names of the admin resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `postCategory`, `admin`, `comments`, `postTags`, `tags`.
     *
     * @param \App\QueryBuilders\PostBuilder $query
     * @param \App\Models\Post $post
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return PostResource
     */
    public function show(PostBuilder $query, Post $post): PostResource
    {
        return new PostResource($query->find($post->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific post resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam post required *integer* - No-example
     * The identifier of a specific post resource.
     *
     * @param \App\Http\Requests\PostSaveRequest $request
     * @param \App\Models\Post $post
     *
     * @return PostResource
     */
    public function update(PostSaveRequest $request, Post $post): PostResource
    {
        $post->fill($request->only($post->offsetGet('fillable')));

        if ($post->isDirty()) {
            $post->save();
        }

        return (new PostResource($post))
            ->additional(['info' => 'The post has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific post resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam post required *integer* - No-example
     * The identifier of a specific post resource.
     *
     * @param \App\Models\Post $post
     *
     * @throws \Exception
     *
     * @return PostResource
     */
    public function destroy(Post $post): PostResource
    {
        $post->delete();

        return (new PostResource($post))
            ->additional(['info' => 'The post has been deleted.']);
    }
}
