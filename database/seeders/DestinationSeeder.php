<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSeeder extends Seeder
{
    public function run()
{
    Destination::create([
        'name' => 'Paket Travel Karimunjawa – Surga Tropis di Jawa Tengah',
        'description' => '"Maladewa-nya Jawa" dengan pantai pasir putih & snorkeling memukau.',
        'image' => '/images/KarimunJawa.jpg',
        'person' => 5,
        'duration' => '4 Hari 3 Malam',
        'price' => 4500000,
    ]);
    
    // Tambahkan data lainnya...
}
}
