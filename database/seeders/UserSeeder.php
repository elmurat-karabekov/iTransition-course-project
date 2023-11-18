<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $users->each(function ($user) {
            Collection::factory(rand(1, 5))->create(['user_id' => $user->id])
                ->each(function ($collection) {
                    Item::factory(rand(1, 30))->create(['collection_id' => $collection->id]);
                });
        });

        DB::table('users')->insert([
            'name' => 'elmurat',
            'email'=> 'elmu0209@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}
