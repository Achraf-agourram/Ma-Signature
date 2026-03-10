<?php

namespace Database\Seeders;

use App\Models\Fragrance;
use App\Models\Maison;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FragranceSeeder extends Seeder
{
    public function run(): void
    {
        $fragrances = [

            /* ================= DIOR ================= */

            ['Sauvage','Dior'],
            ['Sauvage Elixir','Dior'],
            ['Sauvage Parfum','Dior'],
            ['Sauvage EDT','Dior'],
            ['Fahrenheit','Dior'],
            ['Fahrenheit Parfum','Dior'],
            ['Dior Homme','Dior'],
            ['Dior Homme Intense','Dior'],
            ['Dior Homme Parfum','Dior'],
            ['Dior Homme Sport','Dior'],
            ['Eau Sauvage','Dior'],
            ['Eau Sauvage Parfum','Dior'],

            /* ================= CHANEL ================= */

            ['Bleu de Chanel EDT','Chanel'],
            ['Bleu de Chanel EDP','Chanel'],
            ['Bleu de Chanel Parfum','Chanel'],
            ['Allure Homme Sport','Chanel'],
            ['Allure Homme Sport Eau Extreme','Chanel'],
            ['Allure Homme Edition Blanche','Chanel'],
            ['Platinum Egoiste','Chanel'],
            ['Egoiste','Chanel'],
            ['Antaeus','Chanel'],
            ['Pour Monsieur','Chanel'],

            /* ================= YSL ================= */

            ['Y EDT','Yves Saint Laurent'],
            ['Y EDP','Yves Saint Laurent'],
            ['Y Le Parfum','Yves Saint Laurent'],
            ['La Nuit de L’Homme','Yves Saint Laurent'],
            ['La Nuit de L’Homme Bleu Electrique','Yves Saint Laurent'],
            ['L’Homme','Yves Saint Laurent'],
            ['L’Homme Ultime','Yves Saint Laurent'],
            ['L’Homme Cologne Bleue','Yves Saint Laurent'],
            ['Kouros','Yves Saint Laurent'],
            ['M7 Oud Absolu','Yves Saint Laurent'],
            ['Opium Pour Homme','Yves Saint Laurent'],
            ['Y Eau Fraiche','Yves Saint Laurent'],

            /* ================= ARMANI ================= */

            ['Acqua di Gio','Armani'],
            ['Acqua di Gio Profumo','Armani'],
            ['Acqua di Gio Profondo','Armani'],
            ['Acqua di Gio Parfum','Armani'],
            ['Armani Code','Armani'],
            ['Armani Code Profumo','Armani'],
            ['Armani Code Absolu','Armani'],
            ['Stronger With You','Armani'],
            ['Stronger With You Intensely','Armani'],
            ['Stronger With You Absolutely','Armani'],

            /* ================= PACO RABANNE ================= */

            ['1 Million','Paco Rabanne'],
            ['1 Million Lucky','Paco Rabanne'],
            ['1 Million Parfum','Paco Rabanne'],
            ['1 Million Elixir','Paco Rabanne'],
            ['Invictus','Paco Rabanne'],
            ['Invictus Aqua','Paco Rabanne'],
            ['Invictus Legend','Paco Rabanne'],
            ['Invictus Victory','Paco Rabanne'],
            ['Phantom','Paco Rabanne'],
            ['Phantom Parfum','Paco Rabanne'],

            /* ================= JPG ================= */

            ['Le Male','Jean Paul Gaultier'],
            ['Le Male Le Parfum','Jean Paul Gaultier'],
            ['Le Male Ultra Male','Jean Paul Gaultier'],
            ['Le Male Essence','Jean Paul Gaultier'],
            ['Le Male Aviator','Jean Paul Gaultier'],
            ['Scandal Pour Homme','Jean Paul Gaultier'],
            ['Scandal Le Parfum','Jean Paul Gaultier'],
            ['Kokorico','Jean Paul Gaultier'],

            /* ================= VERSACE ================= */

            ['Eros','Versace'],
            ['Eros Flame','Versace'],
            ['Versace Pour Homme','Versace'],
            ['Dylan Blue','Versace'],
            ['Man Eau Fraiche','Versace'],
            ['Oud Noir','Versace'],
            ['The Dreamer','Versace'],
            ['Blue Jeans','Versace'],

            /* ================= DOLCE GABBANA ================= */

            ['The One EDT','Dolce & Gabbana'],
            ['The One EDP','Dolce & Gabbana'],
            ['The One Royal Night','Dolce & Gabbana'],
            ['Light Blue','Dolce & Gabbana'],
            ['Light Blue Eau Intense','Dolce & Gabbana'],
            ['Light Blue Forever','Dolce & Gabbana'],
            ['K','Dolce & Gabbana'],
            ['K EDP','Dolce & Gabbana'],

            /* ================= TOM FORD ================= */

            ['Oud Wood','Tom Ford'],
            ['Tobacco Vanille','Tom Ford'],
            ['Tuscan Leather','Tom Ford'],
            ['Ombre Leather','Tom Ford'],
            ['Noir Extreme','Tom Ford'],
            ['Noir','Tom Ford'],
            ['Grey Vetiver','Tom Ford'],
            ['Beau de Jour','Tom Ford'],
            ['Neroli Portofino','Tom Ford'],
            ['Costa Azzurra','Tom Ford'],
            ['Soleil Blanc','Tom Ford'],
            ['Fucking Fabulous','Tom Ford'],
            ['Lost Cherry','Tom Ford'],
            ['Bitter Peach','Tom Ford'],
            ['Rose Prick','Tom Ford'],
            ['Ebene Fume','Tom Ford'],
            ['Black Orchid','Tom Ford'],
            ['Velvet Orchid','Tom Ford'],
            ['Oud Minerale','Tom Ford'],
            ['Mandarino di Amalfi','Tom Ford'],

            /* ================= CREED ================= */

            ['Aventus','Creed'],
            ['Aventus Cologne','Creed'],
            ['Green Irish Tweed','Creed'],
            ['Silver Mountain Water','Creed'],
            ['Millesime Imperial','Creed'],
            ['Original Vetiver','Creed'],
            ['Viking','Creed'],
            ['Viking Cologne','Creed'],
            ['Royal Oud','Creed'],
            ['Himalaya','Creed'],

            /* ================= PARFUMS DE MARLY ================= */

            ['Layton','Parfums de Marly'],
            ['Layton Exclusif','Parfums de Marly'],
            ['Pegasus','Parfums de Marly'],
            ['Pegasus Exclusif','Parfums de Marly'],
            ['Herod','Parfums de Marly'],
            ['Carlisle','Parfums de Marly'],
            ['Oajan','Parfums de Marly'],
            ['Percival','Parfums de Marly'],
            ['Sedley','Parfums de Marly'],
            ['Greenley','Parfums de Marly'],

            /* ================= MFK ================= */

            ['Baccarat Rouge 540','Maison Francis Kurkdjian'],
            ['Baccarat Rouge 540 Extrait','Maison Francis Kurkdjian'],
            ['Grand Soir','Maison Francis Kurkdjian'],
            ['Oud Satin Mood','Maison Francis Kurkdjian'],
            ['Oud Silk Mood','Maison Francis Kurkdjian'],
            ['Amyris Homme','Maison Francis Kurkdjian'],
            ['Gentle Fluidity Silver','Maison Francis Kurkdjian'],
            ['Gentle Fluidity Gold','Maison Francis Kurkdjian'],
            ['Aqua Universalis','Maison Francis Kurkdjian'],
            ['Aqua Vitae','Maison Francis Kurkdjian'],

        ];

        foreach ($fragrances as $f) {

            $maison = Maison::where('name', $f[1])->first();

            if ($maison) {

                Fragrance::create([
                    'name' => $f[0],
                    'image' => 'fragrances/'.Str::slug($f[0]).'.jpg',
                    'intensity' => 'moderate',
                    'season' => 'spring',
                    'vibe' => 'elegant',
                    'description' => 'Iconic fragrance from '.$f[1],
                    'maison_id' => $maison->id
                ]);

            }

        }
    }
}
