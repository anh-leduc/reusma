<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client')->delete();
        
        \DB::table('client')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'accusantium',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'aut',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'nihil',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'unde',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'quo',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'aut',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'rerum',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ullam',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'quia',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'cum',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'aut',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'impedit',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'architecto',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'repellendus',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'est',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'quia',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'adipisci',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'pariatur',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'eveniet',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'eligendi',
            ),
        ));
        
        
    }
}