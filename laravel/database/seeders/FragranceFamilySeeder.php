<?php

namespace Database\Seeders;

use App\Models\FragranceFamily;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FragranceFamilySeeder extends Seeder
{
    
    public function run(): void
    {
        $families = [
            'Citrus',
            'Floral',
            'White Floral',
            'Yellow Floral',
            'Rose',
            'Woody',
            'Sandalwood',
            'Cedar',
            'Amber',
            'Oriental',
            'Gourmand',
            'Sweet',
            'Vanilla',
            'Fruity',
            'Green',
            'Aquatic',
            'Aromatic',
            'Powdery',
            'Musky',
            'Leather',
            'Oud',
            'Spicy',
            'Warm Spicy',
            'Fresh Spicy',
            'Balsamic',
            'Aldehydic',
            'Honey',
            'Animalic',
            'Smoky',
            'Earthy',
            'Herbal',
            'Metallic',
            'Salty',
            'Mineral',
            'Tea',
            'Coffee',
            'Chocolate',
            'Caramel',
            'Lactonic',
            'Nutty',
            'Tobacco',
            'Rum',
            'Whiskey',
            'Champagne',
            'Soft Spicy'
        ];

        foreach ($families as $family) {
            FragranceFamily::create([
                'name' => $family
            ]);
        }
    }
}
