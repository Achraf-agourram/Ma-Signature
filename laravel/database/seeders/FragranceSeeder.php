<?php

namespace Database\Seeders;

use App\Models\Fragrance;
use App\Models\FragranceFamily;
use App\Models\Maison;
use App\Models\Note;
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

            $fragrance = Fragrance::create([
                'name' => $item['name'],
                'intensity' => $item['intensity'],
                'season' => $item['season'],
                'vibe' => $item['vibe'],
                'description' => $item['description'],
                'image' => $item['image'],
                'maison_id' => $maison->id
            ]);

            foreach ($item['notes'] as $type => $notes) {

                foreach ($notes as $noteName) {

                    $note = Note::firstOrCreate([
                        'note' => $noteName
                    ]);

                    $fragrance->notes()->attach($note->id, [
                        'type' => $type
                    ]);
                }
            }

            foreach ($item['families'] as $familyName) {

                $family = FragranceFamily::firstOrCreate([
                    'name' => $familyName
                ]);

                $fragrance->families()->syncWithoutDetaching($family->id);
            }

        }
    }
}
