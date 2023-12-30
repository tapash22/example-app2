<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Content;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    protected $model = Content::class;

    public function definition()
    {
        return [
            'html_content' => $this->faker->paragraphs(3, true),
            'other_resource' => $this->faker->imageUrl(),
        ];
    }
}
