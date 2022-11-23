<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'contact_instagram' => 'https://www.instagram.com/',
            'contact_facebook' => 'https://www.facebook.com/',
            'contact_twitter' => 'https://twitter.com/',
            'contact_phone_number' => '123456789',
            'contact_email' => 'admin@piim.com',
            'contact_address' => '1234 Main St, City, State 12345',
            'contact_latitude' => '40.7127753',
            'contact_longitude' => '-74.0059728',
        ];

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
