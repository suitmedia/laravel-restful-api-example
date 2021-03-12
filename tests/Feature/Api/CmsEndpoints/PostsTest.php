<?php

namespace Tests\Feature\Api\CmsEndpoints;

use App\Models\CmsAdmin;
use App\Models\Post;
use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Currently logged in CMS Admin.
     *
     * @var CmsAdmin
     */
    protected $cmsAdmin;

    /**
     * Current endpoint url which being tested.
     *
     * @var string
     */
    protected $endpoint = '/api/posts/';

    /**
     * Faker generator instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * The model which being tested.
     *
     * @var Post
     */
    protected $model;

    /**
     * Setup the test environment.
     *
     * return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->seed(['PermissionSeeder', 'RoleSeeder']);

        $this->faker = new Generator();
        $this->cmsAdmin = CmsAdmin::factory()->create()->assignRole('super-administrator');

        $this->actingAs($this->cmsAdmin, config('api.cms_guard'));

        Post::factory(10)->create();
        $this->model = Post::findOrFail(5);
    }

    /** @test */
    public function index_endpoint_works_as_expected()
    {
        $this->getJson($this->endpoint)
            ->assertStatus(200)
            ->assertJsonFragment([
                'post_category_id' => $this->model->getAttribute('post_category_id'),
                'admin_id' => $this->model->getAttribute('admin_id'),
                'title' => $this->model->getAttribute('title'),
                'description' => $this->model->getAttribute('description'),
                'content' => $this->model->getAttribute('content'),
                'published' => $this->model->getAttribute('published'),
            ]);
    }

    /** @test */
    public function show_endpoint_works_as_expected()
    {
        $this->getJson($this->endpoint.$this->model->getKey())
            ->assertStatus(200)
            ->assertJsonFragment([
                'post_category_id' => $this->model->getAttribute('post_category_id'),
                'admin_id' => $this->model->getAttribute('admin_id'),
                'title' => $this->model->getAttribute('title'),
                'description' => $this->model->getAttribute('description'),
                'content' => $this->model->getAttribute('content'),
                'published' => $this->model->getAttribute('published'),
            ]);
    }

    /** @test */
    public function create_endpoint_works_as_expected()
    {
        // Submitted data
        $data = Post::factory()->raw();

        // The data which should be shown
        $seenData = $data;

        $this->postJson($this->endpoint, $data)
            ->assertStatus(201)
            ->assertJsonFragment($seenData);
    }

    /** @test */
    public function update_endpoint_works_as_expected()
    {
        // Submitted data
        $data = Post::factory()->raw();

        // The data which should be shown
        $seenData = $data;

        $this->patchJson($this->endpoint.$this->model->getKey(), $data)
            ->assertStatus(200)
            ->assertJsonFragment($seenData);
    }

    /** @test */
    public function delete_endpoint_works_as_expected()
    {
        $this->deleteJson($this->endpoint.$this->model->getKey())
            ->assertStatus(200)
            ->assertJsonFragment([
                'info' => 'The post has been deleted.',
            ]);

        $this->assertDatabaseMissing('cms_admins', [
            'post_category_id' => $this->model->getAttribute('post_category_id'),
            'admin_id' => $this->model->getAttribute('admin_id'),
            'title' => $this->model->getAttribute('title'),
            'description' => $this->model->getAttribute('description'),
            'content' => $this->model->getAttribute('content'),
            'published' => $this->model->getAttribute('published'),
            'deleted_at' => null,
        ]);
    }
}
