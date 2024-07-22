<?php

namespace Tests\Feature;

use App\Models\Menu;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMenuTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_menu(): void
    {
        // Create a user
        $user = User::factory()->create();

        // Create a partner associated with the user
        $partner = Partner::factory()->create([
            'user_id' => $user->id,
        ]);

        // Create a menu associated with the partner
        $menu = Menu::factory()->create([
            'partner_id' => $partner->id,
        ]);

        // Act as the created user
        $this->actingAs($user);

        // Make a GET request to view the menu
        $response = $this->get(route('partner.viewMenu', ['id' => $menu->id]));

        // Assert the response status
        $response->assertStatus(200);

        // Assert that the view has the correct data
        $response->assertViewHas('viewMenu', $menu);
        $response->assertViewHas('userData');
        $response->assertViewHas('partnerData');
    }
}
