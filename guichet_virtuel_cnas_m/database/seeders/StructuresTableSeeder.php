<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structures')->insert([
            ['name' => 'Adrar AGENCY', 'state_id' =>  '1', 'structure_type_id' => 1,'address'=>'Downtown, Adrar, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chlef AGENCY', 'state_id' =>  '2', 'structure_type_id' => 1,'address'=>'Downtown, Chlef, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laghouat AGENCY', 'state_id' =>  '3', 'structure_type_id' => 1,'address'=>'Downtown,Laghouat, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oum El Bouaghi AGENCY', 'state_id' =>  '4', 'structure_type_id' => 1,'address'=>'Downtown,Oum El Bouaghi, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Batna AGENCY', 'state_id' =>  '5', 'structure_type_id' => 1,'address'=>'Downtown,Batna, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Béjaïa AGENCY', 'state_id' =>  '6', 'structure_type_id' => 1,'address'=>'Downtown,Béjaïa, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biskra AGENCY', 'state_id' =>  '7', 'structure_type_id' => 1,'address'=>'Downtown,Biskra, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Béchar AGENCY', 'state_id' =>  '8', 'structure_type_id' => 1,'address'=>'Downtown,Béchar, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blida AGENCY', 'state_id' =>  '9', 'structure_type_id' => 1,'address'=>'Downtown,Blida, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bouira AGENCY', 'state_id' =>  '10', 'structure_type_id' => 1,'address'=>'Downtown,Bouira, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tamanrasset AGENCY', 'state_id' =>  '11', 'structure_type_id' => 1,'address'=>'Downtown,Tamanrasset, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tébessa AGENCY', 'state_id' =>  '12', 'structure_type_id' => 1,'address'=>'Downtown,Tébessa, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tlemcen AGENCY', 'state_id' =>  '13', 'structure_type_id' => 1,'address'=>'Downtown,Tlemcen, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tiaret AGENCY', 'state_id' =>  '14', 'structure_type_id' => 1,'address'=>'Downtown,Tiaret, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tizi Ouzou AGENCY', 'state_id' =>  '15', 'structure_type_id' => 1,'address'=>'Downtown,Tizi Ouzou, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alger AGENCY', 'state_id' =>  '16', 'structure_type_id' => 1,'address'=>'Downtown,Alger, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Djelfa AGENCY', 'state_id' =>  '17', 'structure_type_id' => 1,'address'=>'Downtown,Djelfa, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jijel AGENCY', 'state_id' =>  '18', 'structure_type_id' => 1,'address'=>'Downtown,Jijel, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sétif AGENCY', 'state_id' =>  '19', 'structure_type_id' => 1,'address'=>'Downtown,Sétif, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Saïda AGENCY', 'state_id' =>  '20', 'structure_type_id' => 1,'address'=>'Downtown,Saïda, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Skikda AGENCY', 'state_id' =>  '21', 'structure_type_id' => 1,'address'=>'Downtown,Skikda, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sidi Bel Abbes AGENCY', 'state_id' =>  '22', 'structure_type_id' => 1,'address'=>'Downtown,Sidi Bel Abbes, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Annaba AGENCY', 'state_id' =>  '23', 'structure_type_id' => 1,'address'=>'Downtown,Annaba, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Guelma AGENCY', 'state_id' =>  '24', 'structure_type_id' => 1,'address'=>'Downtown,Guelma, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Constantine AGENCY', 'state_id' =>  '25', 'structure_type_id' => 1,'address'=>'Downtown,Constantine, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Médéa AGENCY', 'state_id' =>  '26', 'structure_type_id' => 1,'address'=>'Downtown,Médéa, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mostaganem AGENCY', 'state_id' =>  '27', 'structure_type_id' => 1,'address'=>'Downtown,Mostaganem, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MSila AGENCY', 'state_id' =>  '28', 'structure_type_id' => 1,'address'=>'Downtown,MSila, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mascara AGENCY', 'state_id' =>  '29', 'structure_type_id' => 1,'address'=>'Downtown,Mascara, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ouargla AGENCY', 'state_id' =>  '30', 'structure_type_id' => 1,'address'=>'Downtown,Ouargla, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oran AGENCY', 'state_id' =>  '31', 'structure_type_id' => 1,'address'=>'Downtown,Oran, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'El Bayadh AGENCY', 'state_id' =>  '32', 'structure_type_id' => 1,'address'=>'Downtown,El Bayadh, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Illizi AGENCY', 'state_id' =>  '33', 'structure_type_id' => 1,'address'=>'Downtown,Illizi, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bordj Bou Arreridj AGENCY', 'state_id' =>  '34', 'structure_type_id' => 1,'address'=>'Downtown,Bordj Bou Arreridj, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Boumerdès AGENCY', 'state_id' =>  '35', 'structure_type_id' => 1,'address'=>'Downtown,Boumerdès, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'El Tarf AGENCY', 'state_id' =>  '36', 'structure_type_id' => 1,'address'=>'Downtown,El Tarf, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tindouf AGENCY', 'state_id' =>  '37', 'structure_type_id' => 1,'address'=>'Downtown,Tindouf, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tissemsilt AGENCY', 'state_id' =>  '38', 'structure_type_id' => 1,'address'=>'Downtown,Tissemsilt, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'El Oued AGENCY', 'state_id' =>  '39', 'structure_type_id' => 1,'address'=>'Downtown,El Oued, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khenchela AGENCY', 'state_id' =>  '40', 'structure_type_id' => 1,'address'=>'Downtown,Khenchela, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Souk Ahras AGENCY', 'state_id' =>  '41', 'structure_type_id' => 1,'address'=>'Downtown,Souk Ahras, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tipaza AGENCY', 'state_id' =>  '42', 'structure_type_id' => 1,'address'=>'Downtown,Tipaza, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mila AGENCY', 'state_id' =>  '43', 'structure_type_id' => 1,'address'=>'Downtown,Mila, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aïn Defla AGENCY', 'state_id' =>  '44', 'structure_type_id' => 1,'address'=>'Downtown,Aïn Defla, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Naâma AGENCY', 'state_id' =>  '45', 'structure_type_id' => 1,'address'=>'Downtown,Naâma, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aïn Témouchent AGENCY', 'state_id' =>  '46', 'structure_type_id' => 1,'address'=>'Downtown,Aïn Témouchent, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ghardaïa AGENCY', 'state_id' =>  '47', 'structure_type_id' => 1,'address'=>'Downtown,Ghardaïa, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Relizane AGENCY', 'state_id' =>  '48', 'structure_type_id' => 1,'address'=>'Downtown,Relizane, Algeria', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HEAD OFFICE', 'state_id' =>  '16', 'structure_type_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
