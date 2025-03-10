<?php

namespace Tests\Feature;

use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class GroupControllerTest extends TestCase
{
    use RefreshDatabase;

    #[test]
    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create();
        Sanctum::actingAs($user);
    }

    #[test]
    public function it_can_list_groups()
    {
        Group::factory()->count(3)->create();

        $response = $this->getJson('/api/groups');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [['id', 'name', 'created_at', 'updated_at']],
                'links',
            ]);
    }

    #[test]
    public function it_can_store_a_group()
    {
        $groupData = [
            'name' => 'Test Group'
        ];

        $response = $this->postJson('/api/groups', $groupData);

        $response->assertStatus(201)
            ->assertJson(['message' => 'Group created successfully!']);

        $this->assertDatabaseHas('groups', $groupData);
    }

    #[test]
    public function it_can_show_a_group()
    {
        $group = Group::factory()->create();

        $response = $this->getJson("/api/groups/{$group->id}");

        $response->assertStatus(200)
            ->assertJson(['id' => $group->id, 'name' => $group->name]);
    }

    #[test]
    public function it_can_update_a_group()
    {
        $group = Group::factory()->create();

        $updatedData = ['name' => 'Updated Group'];

        $response = $this->putJson("/api/groups/{$group->id}", $updatedData);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Group updated successfully!']);

        $this->assertDatabaseHas('groups', $updatedData);
    }

    #[test]
    public function it_can_delete_a_group()
    {
        $group = Group::factory()->create();

        $response = $this->deleteJson("/api/groups/{$group->id}");

        $response->assertStatus(200)
            ->assertJson(['message' => 'Group deleted successfully!']);

        $this->assertDatabaseMissing('groups', ['id' => $group->id]);
    }
}
