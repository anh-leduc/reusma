<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '003d3705-8',
                'username' => 'otto.fahey',
                'password' => '43e9715350a741d88f3d575e8960594803bdab13',
                'name' => 'O\'Conner',
                'status' => 'Esse fuga aut nostru',
                'gender' => 'male',
                'id_level' => 3,
                'privillege' => 1,
                'join_date' => '2020-08-01',
            ),
            1 => 
            array (
                'id' => '01356a40-d',
                'username' => 'jamal33',
                'password' => 'bd8ce8ec3d6f9e56e91fa75d99fb636dc81b6bd8',
                'name' => 'Heller',
                'status' => 'Quidem qui odio vel ',
                'gender' => 'male',
                'id_level' => 2,
                'privillege' => 0,
                'join_date' => '1970-07-23',
            ),
            2 => 
            array (
                'id' => '015a7f81-a',
                'username' => 'quitzon.gabriella',
                'password' => '0d11597beff498d325fba06f1d1a25ac2701bd3c',
                'name' => 'Lubowitz',
                'status' => 'Et velit eaque rerum',
                'gender' => NULL,
                'id_level' => 3,
                'privillege' => 0,
                'join_date' => '1980-08-07',
            ),
            3 => 
            array (
                'id' => '053f09e3-1',
                'username' => 'spencer.letha',
                'password' => 'e6a4d6f5efae805cef509db3eaf2f1303bce2d95',
                'name' => 'Bahringer',
                'status' => 'Neque saepe ea disti',
                'gender' => NULL,
                'id_level' => 1,
                'privillege' => 1,
                'join_date' => '1985-07-03',
            ),
            4 => 
            array (
                'id' => '1bee1f3d-1',
                'username' => 'emie.kuhlman',
                'password' => 'b9011ece951a1998260407c39cbe8f00753f2835',
                'name' => 'Little',
                'status' => 'Illum distinctio acc',
                'gender' => NULL,
                'id_level' => 6,
                'privillege' => 0,
                'join_date' => '1996-12-31',
            ),
            5 => 
            array (
                'id' => '20ee182f-7',
                'username' => 'mueller.emilie',
                'password' => 'e777b0e78200e9d024de20e21c01a29e374fe301',
                'name' => 'Eichmann',
                'status' => 'Aperiam eum officiis',
                'gender' => 'male',
                'id_level' => 4,
                'privillege' => 1,
                'join_date' => '1988-01-02',
            ),
            6 => 
            array (
                'id' => '2473bf83-6',
                'username' => 'ibins',
                'password' => 'c5e7e94cf1f3f243539f198e3020fe3fdcb4afee',
                'name' => 'Herman',
                'status' => 'Praesentium ut animi',
                'gender' => NULL,
                'id_level' => 9,
                'privillege' => 1,
                'join_date' => '1992-03-18',
            ),
            7 => 
            array (
                'id' => '423f0719-a',
                'username' => 'beatrice.o\'hara',
                'password' => '3052b5e4e694ebb346ce4698db2b0b87f19853bc',
                'name' => 'Klein',
                'status' => 'Voluptas numquam qua',
                'gender' => NULL,
                'id_level' => 8,
                'privillege' => 1,
                'join_date' => '1970-01-07',
            ),
            8 => 
            array (
                'id' => '43732560-6',
                'username' => 'uconnelly',
                'password' => 'df6eae4a3664a81a6a1aa745b4af44377d1b93aa',
                'name' => 'Huel',
                'status' => 'Sunt aperiam est sin',
                'gender' => 'female',
                'id_level' => 3,
                'privillege' => 1,
                'join_date' => '1973-07-20',
            ),
            9 => 
            array (
                'id' => '4e595c98-5',
                'username' => 'welch.emory',
                'password' => 'bae18f330594aefb11c0e011fc4bf41398cba6a2',
                'name' => 'Kuhn',
                'status' => 'Minus laboriosam vol',
                'gender' => NULL,
                'id_level' => 6,
                'privillege' => 0,
                'join_date' => '2009-10-04',
            ),
            10 => 
            array (
                'id' => '6233e0f9-2',
                'username' => 'johnpaul12',
                'password' => 'cc30fdcd2387099f5bd88d410102756a6debaee2',
                'name' => 'Eichmann',
                'status' => 'Corporis cupiditate ',
                'gender' => NULL,
                'id_level' => 10,
                'privillege' => 1,
                'join_date' => '1976-10-31',
            ),
            11 => 
            array (
                'id' => '6274a598-f',
                'username' => 'hmccullough',
                'password' => '0cf8e6709c486621a58df7096dd005d083634aca',
                'name' => 'Stokes',
                'status' => 'Officiis cumque volu',
                'gender' => NULL,
                'id_level' => 7,
                'privillege' => 0,
                'join_date' => '1993-05-09',
            ),
            12 => 
            array (
                'id' => '81290204-c',
                'username' => 'bergstrom.carmel',
                'password' => 'b248a586421f553803ca1025ba68d0b2355bd894',
                'name' => 'Hilll',
                'status' => 'Quisquam dolor exerc',
                'gender' => NULL,
                'id_level' => 8,
                'privillege' => 1,
                'join_date' => '1998-04-28',
            ),
            13 => 
            array (
                'id' => '8bd936d7-d',
                'username' => 'jules27',
                'password' => '7df1f4daf8d3cf375609dcc4b53b4e0912bc0dfc',
                'name' => 'Hauck',
                'status' => 'Molestias laborum si',
                'gender' => NULL,
                'id_level' => 7,
                'privillege' => 1,
                'join_date' => '2019-02-07',
            ),
            14 => 
            array (
                'id' => '90a2034b-6',
                'username' => 'sharon01',
                'password' => '0d167ccbf70fec89c94a3752851ce62a220e4e8f',
                'name' => 'Johns',
                'status' => 'Enim cum minima volu',
                'gender' => NULL,
                'id_level' => 6,
                'privillege' => 0,
                'join_date' => '1988-04-18',
            ),
            15 => 
            array (
                'id' => '95384462-0',
                'username' => 'weston.wilderman',
                'password' => '2be71757a4d18107f09a30403c8f5ec3992b80d5',
                'name' => 'Spinka',
                'status' => 'Non corporis assumen',
                'gender' => NULL,
                'id_level' => 2,
                'privillege' => 0,
                'join_date' => '2020-07-21',
            ),
            16 => 
            array (
                'id' => '99c9341e-b',
                'username' => 'zcormier',
                'password' => '85532703eca4a35d6020bcae88f0ed12891366d6',
                'name' => 'Treutel',
                'status' => 'Et nulla vel distinc',
                'gender' => NULL,
                'id_level' => 10,
                'privillege' => 1,
                'join_date' => '1985-12-22',
            ),
            17 => 
            array (
                'id' => '9d39339f-2',
                'username' => 'rossie.fahey',
                'password' => 'ea556927f018fd964590d25fd63a7a130d9bfdc2',
                'name' => 'Dare',
                'status' => 'Facere quis est volu',
                'gender' => NULL,
                'id_level' => 10,
                'privillege' => 1,
                'join_date' => '1970-04-09',
            ),
            18 => 
            array (
                'id' => 'a56d3c6f-f',
                'username' => 'hertha08',
                'password' => '2bb68209d627bac94aeeec2b062237ebe3ceeb2c',
                'name' => 'Nader',
                'status' => 'Hic sequi quod aut v',
                'gender' => NULL,
                'id_level' => 7,
                'privillege' => 0,
                'join_date' => '2005-09-15',
            ),
            19 => 
            array (
                'id' => 'ad912800-4',
                'username' => 'goyette.petra',
                'password' => 'f1b009744c900c62d7ddd21563482ceca5e87609',
                'name' => 'Kohler',
                'status' => 'Aperiam enim reicien',
                'gender' => 'female',
                'id_level' => 2,
                'privillege' => 0,
                'join_date' => '2020-07-23',
            ),
            20 => 
            array (
                'id' => 'b465c38c-8',
                'username' => 'froberts',
                'password' => '6a1a30b12de0340b48401a9fc643adc350d77237',
                'name' => 'Price',
                'status' => 'Aliquid quae libero ',
                'gender' => NULL,
                'id_level' => 1,
                'privillege' => 0,
                'join_date' => '1976-09-17',
            ),
            21 => 
            array (
                'id' => 'bafaebf5-c',
                'username' => 'arnulfo.wisozk',
                'password' => 'a0189f8193739ec9b87c4e1a44633311d3935973',
                'name' => 'Little',
                'status' => 'Libero odio ratione ',
                'gender' => NULL,
                'id_level' => 9,
                'privillege' => 1,
                'join_date' => '1972-05-11',
            ),
            22 => 
            array (
                'id' => 'c2e69af4-5',
                'username' => 'ressie.connelly',
                'password' => '683b5bfa4ff5487cf9bc97e71186f2b938b99405',
                'name' => 'Sipes',
                'status' => 'Quos voluptatem accu',
                'gender' => NULL,
                'id_level' => 5,
                'privillege' => 0,
                'join_date' => '2020-07-09',
            ),
            23 => 
            array (
                'id' => 'C938b9d7-4',
                'username' => 'loy98',
                'password' => '4f7d9adb90eb5b32d28d8fd01b9b82ccf166462f',
                'name' => 'Lehner',
                'status' => 'Quia autem quia sit ',
                'gender' => NULL,
                'id_level' => 5,
                'privillege' => 1,
                'join_date' => '2020-07-13',
            ),
            24 => 
            array (
                'id' => 'C93d3705-8',
                'username' => 'otto.fahey',
                'password' => '43e9715350a741d88f3d575e8960594803bdab13',
                'name' => 'O\'Conner',
                'status' => 'Esse fuga aut nostru',
                'gender' => 'male',
                'id_level' => 3,
                'privillege' => 1,
                'join_date' => '2020-08-01',
            ),
            25 => 
            array (
                'id' => 'ca38b9d7-4',
                'username' => 'loy98',
                'password' => '4f7d9adb90eb5b32d28d8fd01b9b82ccf166462f',
                'name' => 'Lehner',
                'status' => 'Quia autem quia sit ',
                'gender' => NULL,
                'id_level' => 5,
                'privillege' => 1,
                'join_date' => '2020-07-13',
            ),
            26 => 
            array (
                'id' => 'df6b767c-9',
                'username' => 'amparo.wuckert',
                'password' => '5c6816826e7ee6ff2d9b1121d99d95642b1ba211',
                'name' => 'Rodriguez',
                'status' => 'Nam commodi voluptat',
                'gender' => NULL,
                'id_level' => 1,
                'privillege' => 0,
                'join_date' => '2017-12-15',
            ),
            27 => 
            array (
                'id' => 'e6261a79-5',
                'username' => 'jaleel.champlin',
                'password' => 'aaa33aeb206fefa18544c95756fe2b55a949bad9',
                'name' => 'Rodriguez',
                'status' => 'Earum ducimus tempor',
                'gender' => NULL,
                'id_level' => 5,
                'privillege' => 1,
                'join_date' => '1999-12-04',
            ),
            28 => 
            array (
                'id' => 'e70d779a-8',
                'username' => 'mnader',
                'password' => '7f6a1705562797db243f2c279a32c370fa28851c',
                'name' => 'Bartell',
                'status' => 'Id et nemo nam at et',
                'gender' => NULL,
                'id_level' => 4,
                'privillege' => 0,
                'join_date' => '2007-09-03',
            ),
            29 => 
            array (
                'id' => 'eb191068-d',
                'username' => 'ywolff',
                'password' => 'ab585cfa73929d126f2d5e870a385ddcff944be4',
                'name' => 'Welch',
                'status' => 'Voluptatem cupiditat',
                'gender' => NULL,
                'id_level' => 9,
                'privillege' => 0,
                'join_date' => '1992-04-05',
            ),
            30 => 
            array (
                'id' => 'f65d0751-6',
                'username' => 'lyda63',
                'password' => 'd45b5d2dc54007cc2bb5ccaca843b4376526e84d',
                'name' => 'Stanton',
                'status' => 'Pariatur quam sunt a',
                'gender' => NULL,
                'id_level' => 8,
                'privillege' => 1,
                'join_date' => '1983-05-03',
            ),
            31 => 
            array (
                'id' => 'f92c0f7a-9',
                'username' => 'libbie.wolf',
                'password' => '29ee5045df5b8a15399c4f6ef976309f5075ce40',
                'name' => 'Hills',
                'status' => 'Alias consequatur op',
                'gender' => NULL,
                'id_level' => 4,
                'privillege' => 1,
                'join_date' => '2006-12-12',
            ),
        ));
        
        
    }
}