<?php

namespace Tests\Feature;

use App\Models\Group;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class GroupSubjectControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function authenticate()
    {
        $user = User::factory()->create();
        return $this->actingAs($user);
    }

    #[Test]
    public function it_can_attach_a_subject_to_group()
    {
        $this->authenticate();

        $group = Group::factory()->create();
        $subject = Subject::factory()->create();

        $data = [
            'group_id' => $group->id,
            'subject_id' => $subject->id
        ];

        $response = $this->postJson('/api/group-subjects', $data);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Group attached']);

        $this->assertDatabaseHas('group_subject', $data);
    }

    #[Test]
    public function it_can_update_group_subject()
    {
        $this->authenticate();

        $group = Group::factory()->create();
        $subject = Subject::factory()->create();
        $group->subject()->attach($subject->id);

        $data = ['subject_id' => $subject->id];

        $response = $this->putJson("/api/group-subjects/{$group->id}", $data);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Group updated']);

        $this->assertDatabaseMissing('group_subject', [
            'group_id' => $group->id,
            'subject_id' => $subject->id
        ]);
    }

    #[Test]
    public function it_can_detach_a_subject_from_group()
    {
        $this->authenticate();

        $group = Group::factory()->create();
        $subject = Subject::factory()->create();
        $group->subject()->attach($subject->id);

        $response = $this->deleteJson("/api/group-subjects/{$subject->id}", [
            'group_id' => $group->id
        ]);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Group detached']);

        $this->assertDatabaseMissing('group_subject', [
            'group_id' => $group->id,
            'subject_id' => $subject->id
        ]);
    }
}
