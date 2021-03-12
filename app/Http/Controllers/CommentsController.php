<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentSaveRequest;
use App\Http\Resources\CommentCollection;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\QueryBuilders\CommentBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Comment Management
 *
 * API Endpoints for managing comments.
 */
class CommentsController extends Controller
{
    /**
     * Determine if any access to this resource require authorization.
     *
     * @var bool
     */
    protected static $requireAuthorization = false;

    /**
     * CommentsController constructor.
     */
    public function __construct()
    {
        if (self::$requireAuthorization || (auth()->user() !== null)) {
            $this->authorizeResource(Comment::class);
        }
    }

    /**
     * Resource Collection.
     * Display a collection of the comment resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[comments] *string* - No-example
     * Comma-separated field/attribute names of the comment resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[post] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `post`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`, `post.id`, `post.post_category_id`, `post.admin_id`, `post.title`, `post.description`, `post.content`, `post.published`, `post.deleted_at`, `post.created_at`, `post.updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\CommentBuilder $query
     *
     * @return CommentCollection
     */
    public function index(CommentBuilder $query): CommentCollection
    {
        return new CommentCollection($query->paginate());
    }

    /**
     * Create Resource.
     * Create a new comment resource.
     *
     * @authenticated
     *
     * @param \App\Http\Requests\CommentSaveRequest $request
     * @param \App\Models\Comment $comment
     *
     * @return JsonResponse
     */
    public function store(CommentSaveRequest $request, Comment $comment): JsonResponse
    {
        $comment->fill($request->only($comment->offsetGet('fillable')))
            ->save();

        $resource = (new CommentResource($comment))
            ->additional(['info' => 'The new comment has been saved.']);

        return $resource->toResponse($request)->setStatusCode(201);
    }

    /**
     * Show Resource.
     * Display a specific comment resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam comment required *integer* - No-example
     * The identifier of a specific comment resource.
     *
     * @queryParam fields[comments] *string* - No-example
     * Comma-separated field/attribute names of the comment resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_id`, `user_id`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam fields[post] *string* - No-example
     * Comma-separated field/attribute names of the post resource to include in the response document.
     * The available fields for current endpoint are: `id`, `post_category_id`, `admin_id`, `title`, `description`, `content`, `published`, `deleted_at`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `post`.
     *
     * @param \App\QueryBuilders\CommentBuilder $query
     * @param \App\Models\Comment $comment
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return CommentResource
     */
    public function show(CommentBuilder $query, Comment $comment): CommentResource
    {
        return new CommentResource($query->find($comment->getKey()));
    }

    /**
     * Update Resource.
     * Update a specific comment resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam comment required *integer* - No-example
     * The identifier of a specific comment resource.
     *
     * @param \App\Http\Requests\CommentSaveRequest $request
     * @param \App\Models\Comment $comment
     *
     * @return CommentResource
     */
    public function update(CommentSaveRequest $request, Comment $comment): CommentResource
    {
        $comment->fill($request->only($comment->offsetGet('fillable')));

        if ($comment->isDirty()) {
            $comment->save();
        }

        return (new CommentResource($comment))
            ->additional(['info' => 'The comment has been updated.']);
    }

    /**
     * Delete Resource.
     * Delete a specific comment resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam comment required *integer* - No-example
     * The identifier of a specific comment resource.
     *
     * @param \App\Models\Comment $comment
     *
     * @throws \Exception
     *
     * @return CommentResource
     */
    public function destroy(Comment $comment): CommentResource
    {
        $comment->delete();

        return (new CommentResource($comment))
            ->additional(['info' => 'The comment has been deleted.']);
    }
}
