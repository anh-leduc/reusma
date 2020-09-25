<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project')->delete();
        
        \DB::table('project')->insert(array (
            0 => 
            array (
                'id' => '02703ffa-e',
                'name' => 'Monty',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 179.0,
                'real_cost' => 76.0,
                'id_client' => 9,
                'id_pm' => '43732560-6',
            ),
            1 => 
            array (
                'id' => '08a8f79c-7',
                'name' => 'Amely',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 142.0,
                'real_cost' => 159.0,
                'id_client' => 5,
                'id_pm' => '1bee1f3d-1',
            ),
            2 => 
            array (
                'id' => '0974e87c-5',
                'name' => 'Miguel',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 72.0,
                'real_cost' => 66.0,
                'id_client' => 18,
                'id_pm' => '9d39339f-2',
            ),
            3 => 
            array (
                'id' => '0fba8b6e-a',
                'name' => 'Christopher',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 70.0,
                'real_cost' => 96.0,
                'id_client' => 11,
                'id_pm' => '6233e0f9-2',
            ),
            4 => 
            array (
                'id' => '12b3b893-d',
                'name' => 'Courtney',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 169.0,
                'real_cost' => 84.0,
                'id_client' => 4,
                'id_pm' => 'ca38b9d7-4',
            ),
            5 => 
            array (
                'id' => '139c614c-0',
                'name' => 'Jaden',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pre-sale',
                'total_effort' => 187.0,
                'real_cost' => 90.0,
                'id_client' => 2,
                'id_pm' => 'bafaebf5-c',
            ),
            6 => 
            array (
                'id' => '1e1ca5ee-0',
                'name' => 'Shaniya',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 135.0,
                'real_cost' => 106.0,
                'id_client' => 1,
                'id_pm' => 'b465c38c-8',
            ),
            7 => 
            array (
                'id' => '212bb91f-9',
                'name' => 'Jo',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 181.0,
                'real_cost' => 179.0,
                'id_client' => 17,
                'id_pm' => '99c9341e-b',
            ),
            8 => 
            array (
                'id' => '3271b385-9',
                'name' => 'Colleen',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 152.0,
                'real_cost' => 99.0,
                'id_client' => 16,
                'id_pm' => '95384462-0',
            ),
            9 => 
            array (
                'id' => '33cb5aef-4',
                'name' => 'Candelario',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 129.0,
                'real_cost' => 73.0,
                'id_client' => 4,
                'id_pm' => '053f09e3-1',
            ),
            10 => 
            array (
                'id' => '379abfaf-b',
                'name' => 'Reyes',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 53.0,
                'real_cost' => 200.0,
                'id_client' => 7,
                'id_pm' => '2473bf83-6',
            ),
            11 => 
            array (
                'id' => '37caa79b-6',
                'name' => 'Verla',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 165.0,
                'real_cost' => 152.0,
                'id_client' => 10,
                'id_pm' => '4e595c98-5',
            ),
            12 => 
            array (
                'id' => '3c348e4b-b',
                'name' => 'Leif',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 63.0,
                'real_cost' => 100.0,
                'id_client' => 2,
                'id_pm' => '01356a40-d',
            ),
            13 => 
            array (
                'id' => '3e5a1109-8',
                'name' => 'Barbara',
                'start_date' => '2005-01-01',
                'end_date' => '2020-09-01',
                'status' => 'Active',
                'total_effort' => 53.0,
                'real_cost' => 151.0,
                'id_client' => 12,
                'id_pm' => '6274a598-f',
            ),
            14 => 
            array (
                'id' => '42723ee5-c',
                'name' => 'Rico',
                'start_date' => '2005-01-01',
                'end_date' => '2021-01-01',
                'status' => 'Active',
                'total_effort' => 68.0,
                'real_cost' => 185.0,
                'id_client' => 8,
                'id_pm' => '423f0719-a',
            ),
            15 => 
            array (
                'id' => '4e464d6f-2',
                'name' => 'Lizzie',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 88.0,
                'real_cost' => 200.0,
                'id_client' => 13,
                'id_pm' => '81290204-c',
            ),
            16 => 
            array (
                'id' => '577c76cc-9',
                'name' => 'Ruby',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 147.0,
                'real_cost' => 171.0,
                'id_client' => 7,
                'id_pm' => 'e70d779a-8',
            ),
            17 => 
            array (
                'id' => '64f34eb9-3',
                'name' => 'Forrest',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 76.0,
                'real_cost' => 176.0,
                'id_client' => 1,
                'id_pm' => '003d3705-8',
            ),
            18 => 
            array (
                'id' => '6c6607e9-9',
                'name' => 'Melany',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Active',
                'total_effort' => 68.0,
                'real_cost' => 126.0,
                'id_client' => 15,
                'id_pm' => '90a2034b-6',
            ),
            19 => 
            array (
                'id' => '84751ebd-3',
                'name' => 'Sheridan',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pending',
                'total_effort' => 98.0,
                'real_cost' => 169.0,
                'id_client' => 14,
                'id_pm' => '8bd936d7-d',
            ),
            20 => 
            array (
                'id' => 'a8f26c00-c',
                'name' => 'Mikayla',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pending',
                'total_effort' => 117.0,
                'real_cost' => 163.0,
                'id_client' => 3,
                'id_pm' => '015a7f81-a',
            ),
            21 => 
            array (
                'id' => 'af101c4b-d',
                'name' => 'Clarissa',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Pending',
                'total_effort' => 132.0,
                'real_cost' => 187.0,
                'id_client' => 8,
                'id_pm' => 'eb191068-d',
            ),
            22 => 
            array (
                'id' => 'b7c4100e-a',
                'name' => 'Malvina',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Closed',
                'total_effort' => 179.0,
                'real_cost' => 83.0,
                'id_client' => 6,
                'id_pm' => '20ee182f-7',
            ),
            23 => 
            array (
                'id' => 'bc5118b0-6',
                'name' => 'Salma',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Closed',
                'total_effort' => 106.0,
                'real_cost' => 126.0,
                'id_client' => 10,
                'id_pm' => 'f92c0f7a-9',
            ),
            24 => 
            array (
                'id' => 'bdeb540f-d',
                'name' => 'Hans',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Dolorem do',
                'total_effort' => 99.0,
                'real_cost' => 90.0,
                'id_client' => 20,
                'id_pm' => 'ad912800-4',
            ),
            25 => 
            array (
                'id' => 'bfdbd3e6-0',
                'name' => 'Ambrose',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Omnis quae',
                'total_effort' => 143.0,
                'real_cost' => 186.0,
                'id_client' => 6,
                'id_pm' => 'e6261a79-5',
            ),
            26 => 
            array (
                'id' => 'c3a38226-6',
                'name' => 'Wilhelm',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Eveniet in',
                'total_effort' => 145.0,
                'real_cost' => 59.0,
                'id_client' => 19,
                'id_pm' => 'a56d3c6f-f',
            ),
            27 => 
            array (
                'id' => 'c59c773e-d',
                'name' => 'Sedrick',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Molestiae ',
                'total_effort' => 149.0,
                'real_cost' => 105.0,
                'id_client' => 9,
                'id_pm' => 'f65d0751-6',
            ),
            28 => 
            array (
                'id' => 'c8f6a1e0-e',
                'name' => 'Kiley',
                'start_date' => '2005-01-01',
                'end_date' => '2005-01-01',
                'status' => 'Deleniti s',
                'total_effort' => 121.0,
                'real_cost' => 175.0,
                'id_client' => 3,
                'id_pm' => 'c2e69af4-5',
            ),
            29 => 
            array (
                'id' => 'dd0b9036-5',
                'name' => 'Herman',
                'start_date' => '2005-01-01',
                'end_date' => '2025-01-01',
                'status' => 'Aut repudi',
                'total_effort' => 70.0,
                'real_cost' => 112.0,
                'id_client' => 5,
                'id_pm' => 'df6b767c-9',
            ),
        ));
        
        
    }
}