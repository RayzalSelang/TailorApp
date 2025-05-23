<?php

namespace Database\Seeders;

use App\Models\WebSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebSettings::create([
            'website_name' => 'Tailor Apps',
            'website_url' => 'http://127.0.0.1:8000/',
        ]);
    }
}
