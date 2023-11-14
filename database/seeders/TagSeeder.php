<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = Item::inRandomOrder()->limit(100)->get();
        $tags = Tag::factory(30)->create();

        foreach ($items as $item) {
            $item->tags()->sync($tags->random(rand(5, 10))->pluck('id'));
        }
    }
}