<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\Chapter;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = Chapter::all();

        foreach ($chapters as $chapter) {
            Section::factory(2)->create(['chapter_id' => $chapter->id]);
        }
    }
}
