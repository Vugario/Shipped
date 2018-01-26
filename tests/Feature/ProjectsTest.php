<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanViewProjects()
    {
        $this->be($user = factory('App\User')->create());

        $response = $this->get('/projects');

        $response->assertStatus(200);
    }
}
