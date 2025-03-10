<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class RoomControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function authenticate()
    {
        $user = User::factory()->create();
        return $this->actingAs($user);
    }

    #[Test]
    public function it_can_list_rooms()
    {
        $this->authenticate();
        Room::factory()->count(3)->create();

        $response = $this->getJson('/api/rooms');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [['id', 'name', 'created_at', 'updated_at']],
                'links',
            ]);
    }

    #[Test]
    public function it_can_store_a_room()
    {
        $this->authenticate();
        $roomData = [
            'name' => 'Conference Room',
        ];

        $response = $this->postJson('/api/rooms', $roomData);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Room successfully created']);

        $this->assertDatabaseHas('rooms', $roomData);
    }

    #[Test]
    public function it_can_show_a_room()
    {
        $this->authenticate();
        $room = Room::factory()->create();

        $response = $this->getJson("/api/rooms/{$room->id}");

        $response->assertStatus(200)
            ->assertJson(['id' => $room->id, 'name' => $room->name]);
    }



    #[Test]
    public function it_can_delete_a_room()
    {
        $this->authenticate();
        $room = Room::factory()->create();

        $response = $this->deleteJson("/api/rooms/{$room->id}");

        $response->assertStatus(200)
            ->assertJson(['message' => 'Room successfully deleted']);

        $this->assertDatabaseMissing('rooms', ['id' => $room->id]);
    }
}
