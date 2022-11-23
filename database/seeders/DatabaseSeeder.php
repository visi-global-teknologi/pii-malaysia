<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create admin user
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'is_active' => 'yes'
        ]);

        $this->call(SettingSeeder::class);
    }
}
