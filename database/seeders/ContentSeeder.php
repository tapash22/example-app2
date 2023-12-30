<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    public function run()
    {
        Content::create([
            'html_content' => '<p>This is an example HTML content with a <a href="https://example.com">web link</a>.</p>',
            'other_resource' => 'https://example.com/image.jpg',
        ]);

        // Add more dummy data as needed
        Content::factory()->count(5)->create();
    }
}
