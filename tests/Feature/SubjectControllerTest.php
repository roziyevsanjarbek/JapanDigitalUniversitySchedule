<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubjectControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function authenticate(): SubjectControllerTest
    {
        $user = User::factory()->create();
        return $this->actingAs($user);
    }


    public function it_can_list_subjects(): void
    {
        Subject::factory()->count(10)->create();

        $response = $this->authenticate()->getJson('/api/subjects');

        $response->assertStatus(200)
            ->assertJsonStructure(['data', 'links', 'meta']);
    }


    public function it_can_create_a_subject(): void
    {
        $data = ['name' => 'Mathematics'];

        $response = $this->authenticate()->postJson('/api/subjects', $data);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Subject created successfully!']);

        $this->assertDatabaseHas('subjects', $data);
    }


    public function it_can_show_a_subject(): void
    {
        $subject = Subject::factory()->create();

        $response = $this->authenticate()->getJson("/api/subjects/{$subject->id}");

        $response->assertStatus(200)
            ->assertJson($subject->toArray());
    }


    public function it_can_update_a_subject(): void
    {
        $subject = Subject::factory()->create();
        $data = ['name' => 'Updated Subject'];

        $response = $this->authenticate()->putJson("/api/subjects/{$subject->id}", $data);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Subject updated successfully!']);

        $this->assertDatabaseHas('subjects', $data);
    }


    public function it_can_delete_a_subject(): void
    {
        $subject = Subject::factory()->create();

        $response = $this->authenticate()->deleteJson("/api/subjects/{$subject->id}");

        $response->assertStatus(200)
            ->assertJson(['message' => 'Subject deleted successfully!']);

        $this->assertDatabaseMissing('subjects', ['id' => $subject->id]);
    }
}
