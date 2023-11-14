<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all(); 
        $items = Item::all();

        foreach ($users as $user) {
            $user->likedItems()->sync($items->random(rand(5, 100))->pluck('id'));
        }
    }
}
