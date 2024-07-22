<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition()
    {
        return [
            'menu_title' => $this->faker->sentence(3),
            'menu_description' => $this->faker->paragraph,
            'menu_image' => 'default.jpg',
            'partner_id' => Partner::factory(),
        ];
    }
}
