<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('level')->delete();
        
        \DB::table('level')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level' => 'E1',
            ),
            1 => 
            array (
                'id' => 2,
                'level' => 'E2',
            ),
            2 => 
            array (
                'id' => 3,
                'level' => 'E3',
            ),
            3 => 
            array (
                'id' => 4,
                'level' => 'LE1',
            ),
            4 => 
            array (
                'id' => 5,
                'level' => 'LE2',
            ),
            5 => 
            array (
                'id' => 6,
                'level' => 'LE3',
            ),
            6 => 
            array (
                'id' => 7,
                'level' => 'SE1',
            ),
            7 => 
            array (
                'id' => 8,
                'level' => 'SE2',
            ),
            8 => 
            array (
                'id' => 9,
                'level' => 'Fresher',
            ),
            9 => 
            array (
                'id' => 10,
                'level' => 'Junior',
            ),
        ));
        
        
    }
}