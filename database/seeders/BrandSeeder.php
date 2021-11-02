<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id'         => 96,
                'title'       => 'Any',
                'order' => 0,
            ],
            // [
            //     'id'         => 1,
            //     'title'       => 'Adora',
            //     'order' => 1,
            // ],
            // [
            //     'id'         => 2,
            //     'title'       => 'American Girl',
            //     'order' => 2,
            // ],
            // [
            //     'id'         => 3,
            //     'title'       => 'Anne Geddes',
            //     'order' => 3,
            // ],
            // [
            //     'id'         => 4,
            //     'title'       => 'Annette Himstedt',
            //     'order' => 4,
            // ],
            // [
            //     'id'         => 5,
            //     'title'       => 'Anouk',
            //     'order' => 5,
            // ],
            // [
            //     'id'         => 6,
            //     'title'       => 'Antonio Juan',
            //     'order' => 6,
            // ],
            // [
            //     'id'         => 7,
            //     'title'       => 'Arranbee',
            //     'order' => 7,
            // ],
            // [
            //     'id'         => 8,
            //     'title'       => 'Azone International',
            //     'order' => 8,
            // ],
            // [
            //     'id'         => 9,
            //     'title'       => 'Battat',
            //     'order' => 9,
            // ],
            // [
            //     'id'         => 10,
            //     'title'       => 'Barbie',
            //     'order' => 10,
            // ],
            // [
            //     'id'         => 11,
            //     'title'       => 'Berenguer',
            //     'order' => 11,
            // ],
            // [
            //     'id'         => 12,
            //     'title'       => 'Berjusa',
            //     'order' => 12,
            // ],
            // [
            //     'id'         => 13,
            //     'title'       => 'Blythe',
            //     'order' => 13,
            // ],
            // [
            //     'id'         => 14,
            //     'title'       => 'Bratz',
            //     'order' => 14,
            // ],
            // [
            //     'id'         => 15,
            //     'title'       => 'Butterick',
            //     'order' => 15,
            // ],
            // [
            //     'id'          => 16,
            //     'title'       => 'Cameo',
            //     'order'       => 16,
            // ],
            // [
            //     'id'         => 17,
            //     'title'       => 'Charisma',
            //     'order' => 17,
            // ],
            // [
            //     'id'         => 18,
            //     'title'       => 'Cititoy',
            //     'order' => 18,
            // ],
            // [
            //     'id'         => 19,
            //     'title'       => 'Corolle',
            //     'order' => 19,
            // ],
            // [
            //     'id'         => 20,
            //     'title'       => 'Cosmopolitan',
            //     'order' => 20,
            // ],
            // [
            //     'id'         => 21,
            //     'title'       => 'D.A.M',
            //     'order' => 21,
            // ],
            // [
            //     'id'         => 22,
            //     'title'       => 'Danbury Mint',
            //     'order' => 22,
            // ],
            // [
            //     'id'         => 23,
            //     'title'       => 'Dawn',
            //     'order' => 23,
            // ],
            // [
            //     'id'         => 24,
            //     'title'       => 'Ddung',
            //     'order' => 24,
            // ],
            // [
            //     'id'         => 25,
            //     'title'       => 'Demuse',
            //     'order' => 25,
            // ],
            // [
            //     'id'         => 26,
            //     'title'       => 'Disney',
            //     'order' => 26,
            // ],
            // [
            //     'id'         => 27,
            //     'title'       => 'Eegee’s',
            //     'order' => 27,
            // ],
            // [
            //     'id'         => 28,
            //     'title'       => 'Effanbee',
            //     'order' => 28,
            // ],
            // [
            //     'id'         => 29,
            //     'title'       => 'Famosa',
            //     'order' => 29,
            // ],
            // [
            //     'id'         => 30,
            //     'title'       => 'Fashion Royalty',
            //     'order' => 30,
            // ],
            // [
            //     'id'         => 31,
            //     'title'       => 'Fisher-Price',
            //     'order' => 31,
            // ],
            // [
            //     'id'         => 32,
            //     'title'       => 'Franklin MintGaloob',
            //     'order' => 32,
            // ],
            // [
            //     'id'         => 33,
            //     'title'       => 'Geppeddo',
            //     'order' => 33,
            // ],
            // [
            //     'id'         => 34,
            //     'title'       => 'Gerber',
            //     'order' => 34,
            // ],
            // [
            //     'id'         => 35,
            //     'title'       => 'Gene Marshall',
            //     'order' => 35,
            // ],
            // [
            //     'id'         => 36,
            //     'title'       => 'Götz',
            //     'order' => 36,
            // ],
            // [
            //     'id'         => 37,
            //     'title'       => 'GUND',
            //     'order' => 37,
            // ],
            // [
            //     'id'         => 38,
            //     'title'       => 'Hasbro',
            //     'order' => 38,
            // ],
            // [
            //     'id'         => 39,
            //     'title'       => 'Heidi Ott',
            //     'order' => 39,
            // ],
            // [
            //     'id'         => 40,
            //     'title'       => 'Horsman',
            //     'order' => 40,
            // ],
            // [
            //     'id'         => 41,
            //     'title'       => 'Ideal',
            //     'order' => 41,
            // ],
            // [
            //     'id'         => 42,
            //     'title'       => 'Integrity Toys',
            //     'order' => 42,
            // ],
            // [
            //     'id'         => 43,
            //     'title'       => 'JamieShow',
            //     'order' => 43,
            // ],
            // [
            //     'id'         => 44,
            //     'title'       => 'JamieShow Muses',
            //     'order' => 44,
            // ],
            // [
            //     'id'         => 45,
            //     'title'       => 'JC Toys',
            //     'order' => 45,
            // ],
            // [
            //     'id'         => 46,
            //     'title'       => 'The Janchor',
            //     'order' => 46,
            // ],
            // [
            //     'id'         => 47,
            //     'title'       => 'Jesmar',
            //     'order' => 47,
            // ],
            // [
            //     'id'         => 48,
            //     'title'       => 'Journey Girls',
            //     'order' => 48,
            // ],
            // [
            //     'id'         => 49,
            //     'title'       => 'Käthe Kruse',
            //     'order' => 49,
            // ],
            // [
            //     'id'         => 50,
            //     'title'       => 'Kenner',
            //     'order' => 50,
            // ],
            // [
            //     'id'         => 51,
            //     'title'       => 'Kids Preferred',
            //     'order' => 51,
            // ],
            // [
            //     'id'         => 52,
            //     'title'       => 'Kish',
            //     'order' => 52,
            // ],
            // [
            //     'id'         => 53,
            //     'title'       => 'Lauer Toys',
            //     'order' => 53,
            // ],
            // [
            //     'id'         => 54,
            //     'title'       => 'Lee Middleton',
            //     'order' => 54,
            // ],
            // [
            //     'id'         => 55,
            //     'title'       => 'Lego',
            //     'order' => 55,
            // ],
            // [
            //     'id'         => 56,
            //     'title'       => 'Lovetones',
            //     'order' => 56,
            // ],
            // [
            //     'id'         => 57,
            //     'title'       => 'Madame Alexander',
            //     'order' => 57,
            // ],
            // [
            //     'id'         => 58,
            //     'title'       => 'Manhattan Toy',
            //     'order' => 58,
            // ],
            // [
            //     'id'         => 59,
            //     'title'       => 'Marie Osmond',
            //     'order' => 59,
            // ],
            // [
            //     'id'         => 60,
            //     'title'       => 'Masters of the Universe',
            //     'order' => 60,
            // ],
            // [
            //     'id'         => 61,
            //     'title'       => 'Marx',
            //     'order' => 61,
            // ],
            // [
            //     'id'         => 62,
            //     'title'       => 'MasterPiece Dolls',
            //     'order' => 62,
            // ],
            // [
            //     'id'         => 63,
            //     'title'       => 'Mattel',
            //     'order' => 63,
            // ],
            // [
            //     'id'         => 64,
            //     'title'       => 'McCall’s',
            //     'order' => 64,
            // ],
            // [
            //     'id'         => 65,
            //     'title'       => 'Mego',
            //     'order' => 65,
            // ],
            // [
            //     'id'         => 66,
            //     'title'       => 'Melissa & Doug',
            //     'order' => 66,
            // ],
            // [
            //     'id'         => 67,
            //     'title'       => 'Mezco',
            //     'order' => 67,
            // ],
            // [
            //     'id'         => 68,
            //     'title'       => 'Middleton',
            //     'order' => 68,
            // ],
            // [
            //     'id'         => 69,
            //     'title'       => 'Mizi doll',
            //     'order' => 69,
            // ],    
            // [
            //     'id'         => 70,
            //     'title'       => 'Molly P. Originals',
            //     'order' => 70,
            // ],    
            // [
            //     'id'         => 71,
            //     'title'       => 'Momoko',
            //     'order' => 71,
            // ],    
            // [
            //     'id'         => 72,
            //     'title'       => 'Moulin Roty',
            //     'order' => 72,
            // ],
            // [
            //     'id'         => 73,
            //     'title'       => 'My Life',
            //     'order' => 73,
            // ],
            // [
            //     'id'         => 74,
            //     'title'       => 'My Little Pony',
            //     'order' => 74,
            // ],
            // [
            //     'id'         => 75,
            //     'title'       => 'Naber',
            //     'order' => 75,
            // ],
            // [
            //     'id'         => 76,
            //     'title'       => 'Nancy Ann',
            //     'order' => 76,
            // ],
            // [
            //     'id'         => 77,
            //     'title'       => 'NORFIN',
            //     'order' => 77,
            // ],
            // [
            //     'id'         => 78,
            //     'title'       => 'Paradise Galleries',
            //     'order' => 78,
            // ],
            // [
            //     'id'         => 79,
            //     'title'       => 'Playmates Toys',
            //     'order' => 79,
            // ],
            // [
            //     'id'         => 80,
            //     'title'       => 'Pottery Barn',
            //     'order' => 80,
            // ],
            // [
            //     'id'         => 81,
            //     'title'       => 'Precious Moments',
            //     'order' => 81,
            // ],
            // [
            //     'id'         => 82,
            //     'title'       => 'Remco',
            //     'order' => 82,
            // ],
            // [
            //     'id'         => 83,
            //     'title'       => 'Russ',
            //     'order' => 83,
            // ],
            // [
            //     'id'         => 84,
            //     'title'       => 'Schildkröt',
            //     'order' => 84,
            // ],
            // [
            //     'id'         => 85,
            //     'title'       => 'Seymour Mann Dolls',
            //     'order' => 85,
            // ],
            // [
            //     'id'         => 86,
            //     'title'       => 'Simba',
            //     'order' => 86,
            // ],
            // [
            //     'id'         => 87,
            //     'title'       => 'Takara',
            //     'order' => 87,
            // ],
            // [
            //     'id'         => 88,
            //     'title'       => 'Terri Lee',
            //     'order' => 88,
            // ],
            // [
            //     'id'         => 89,
            //     'title'       => 'The Ashton-Drake Galleries',
            //     'order' => 89,
            // ],
            // [
            //     'id'         => 90,
            //     'title'       => 'Tonner',
            //     'order' => 90,
            // ],
            // [
            //     'id'         => 91,
            //     'title'       => 'Toys “R” Us',
            //     'order' => 91,
            // ],
            // [
            //     'id'         => 92,
            //     'title'       => 'Uneeda',
            //     'order' => 92,
            // ],
            // [
            //     'id'         => 93,
            //     'title'       => 'Vogue',
            //     'order' => 93,
            // ],
            // [
            //     'id'         => 94,
            //     'title'       => 'Zapf',
            //     'order' => 94,
            // ],
            // [
            //     'id'         => 95,
            //     'title'       => 'Others',
            //     'order' => 95,
            // ],
        ];
        Brand::insert($brands);
    }
}
