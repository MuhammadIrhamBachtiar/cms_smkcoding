<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Config; // Pastikan untuk mengimpor model Config

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data baru
        Config::insert([
            [
                'name' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'name' => 'blogname',
                'value' => 'M.Irham'
            ],
            [
                'name' => 'slogan',
                'value' => 'Your tech blog for everything innovative'
            ],
            [
                'name' => 'caption',
                'value' => 'A Bootstrap 5 starter layout for your next blog homepage'
            ],
            [
                'name' => 'ads_widget',
                'value' => 'adsense 1'
            ],
            [
                'name' => 'ads_header',
                'value' => 'adsense 2'
            ],
            [
                'name' => 'ads_header',
                'value' => 'adsense 3'
            ],
            [
                'name' => 'phone',
                'value' => '182903812'
            ],
            [
                'name' => 'email',
                'value' => 'irham@gmail.com'
            ],
            [
                'name' => 'facebook',
                'value' => 'facebook.com'
            ],
            [
                'name' => 'instagram',
                'value' => 'instagram.com'
            ],
            [
                'name' => 'youtube',
                'value' => 'youtube.com'
            ],
            [
                'name' => 'footer',
                'value' => 'M.Irham'
            ],
        ]);
    }
}
