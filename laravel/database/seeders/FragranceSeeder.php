<?php

namespace Database\Seeders;

use App\Models\Fragrance;
use App\Models\Maison;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FragranceSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('fragrancesDataset.json'));
        $fragrances = json_decode($json, true);

        foreach ($fragrances as $item) {

            $maison = Maison::firstOrCreate([
                'maison' => $item['maison']
            ]);

            Fragrance::create([
                'name' => $item['name'],
                'intensity' => $item['intensity'],
                'season' => $item['season'],
                'vibe' => $item['vibe'],
                'description' => $item['description'],
                'image' => $item['image'],
                'maison_id' => $maison->id
            ]);
        }
    }
}
