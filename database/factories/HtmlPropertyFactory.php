<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HtmlProperty;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HtmlProperty>
 */
class HtmlPropertyFactory extends Factory
{
    protected $model = HtmlProperty::class;

    public function definition()
    {
        return [
            'tag' => $this->faker->randomElement(['div', 'span', 'p', 'h1']),
            'html_content' => $this->faker->randomHtml(),
            'style' => $this->faker->randomElement(['color:red;', 'font-size:16px;', 'background-color:blue;']),
            'tag_style' => json_encode([$this->faker->randomElement(['div', 'span', 'p', 'h1']) => $this->faker->randomElement(['color:red;', 'font-size:16px;', 'background-color:blue;'])]),
        ];
    }
}
