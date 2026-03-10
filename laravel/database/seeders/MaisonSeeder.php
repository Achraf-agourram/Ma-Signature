<?php

namespace Database\Seeders;

use App\Models\Maison;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaisonSeeder extends Seeder
{
    public function run(): void
    {
        $maisons = [

            'Dior',
            'Chanel',
            'Yves Saint Laurent',
            'Guerlain',
            'Givenchy',
            'Hermès',
            'Lancôme',
            'Jean Paul Gaultier',
            'Paco Rabanne',
            'Thierry Mugler',

            'Armani',
            'Versace',
            'Dolce & Gabbana',
            'Prada',
            'Valentino',
            'Bvlgari',
            'Cartier',
            'Montblanc',
            'Ferragamo',
            'Burberry',

            'Calvin Klein',
            'Ralph Lauren',
            'Tom Ford',
            'Michael Kors',
            'Marc Jacobs',
            'Coach',
            'Abercrombie & Fitch',
            'Hollister',
            'Victoria’s Secret',
            'DKNY',

            'Creed',
            'Parfums de Marly',
            'Maison Francis Kurkdjian',
            'Byredo',
            'Le Labo',
            'Diptyque',
            'Amouage',
            'Xerjoff',
            'Initio Parfums Privés',
            'Bond No. 9',

            'Nishane',
            'Mancera',
            'Montale',
            'Tiziana Terenzi',
            'Juliette Has a Gun',
            'Etat Libre d’Orange',
            'Memo Paris',
            'Roja Parfums',
            'Clive Christian',
            'Frederic Malle',

            'Azzaro',
            'Davidoff',
            'Issey Miyake',
            'Kenzo',
            'Shiseido',
            'Comme des Garçons',
            'Elie Saab',
            'Maison Margiela',
            'Loewe',
            'Carolina Herrera',

            'Jimmy Choo',
            'Oscar de la Renta',
            'Narciso Rodriguez',
            'Hugo Boss',
            'Bentley',
            'Jaguar',
            'Ferrari',
            'Mercedes-Benz',
            'Lalique',
            'Acqua di Parma',

            'Penhaligon’s',
            'Floris London',
            'Molton Brown',
            'Jo Malone London',
            'Atelier Cologne',
            'Serge Lutens',
            'Histoires de Parfums',
            'Kilian',
            'Nasomatto',
            'Orto Parisi'
        ];

        foreach ($maisons as $maison) {
            Maison::create([
                'maison' => $maison
            ]);
        }
    }
}
