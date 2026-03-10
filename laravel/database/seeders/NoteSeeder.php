<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{ 
    public function run(): void
    {
        $notes = [
            'Bergamot','Lemon','Orange','Mandarin','Grapefruit','Lime','Yuzu','Petitgrain',
            'Apple','Pear','Peach','Apricot','Plum','Cherry','Pineapple','Blackcurrant','Raspberry','Strawberry','Fig','Coconut','Mango','Passionfruit',
            'Rose','Jasmine','Orange Blossom','Neroli','Tuberose','Gardenia','Ylang-Ylang','Lily','Lily of the Valley','Violet','Iris','Magnolia','Peony','Freesia','Carnation','Heliotrope','Hibiscus','Chamomile','Geranium',
            'Mint','Basil','Thyme','Rosemary','Lavender','Sage','Artemisia','Green Tea','Mate','Grass','Violet Leaf','Tomato Leaf',
            'Black Pepper','Pink Pepper','White Pepper','Cardamom','Cinnamon','Clove','Nutmeg','Saffron','Ginger','Anise','Coriander',
            'Sandalwood','Cedarwood','Vetiver','Patchouli','Guaiac Wood','Cashmere Wood','Rosewood','Oak',
            'Amber','Labdanum','Benzoin','Myrrh','Frankincense','Opoponax','Styrax',
            'Vanilla','Tonka Bean','Caramel','Chocolate','Cocoa','Coffee','Praline','Honey','Maple Syrup','Sugar','Marshmallow',
            'White Musk','Musk','Ambrette',
            'Civet','Castoreum','Ambergris',
            'Leather','Birch Tar','Tobacco','Smoke','Incense',
            'Milk','Cream','Almond','Hazelnut','Pistachio',
            'Sea Salt','Seaweed','Marine Notes','Calone',
            'Rum','Whiskey','Cognac','Champagne','Wine',
            'Oud','Iso E Super','Ambroxan','Metallic Notes','Mineral Notes','Powder','Soap','Aldehydes'
        ];

        foreach ($notes as $note) {
            Note::create([
                'note' => $note
            ]);
        }
    }
}
