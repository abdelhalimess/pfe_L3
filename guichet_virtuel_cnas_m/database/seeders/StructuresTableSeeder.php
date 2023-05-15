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
            ['name' => 'AGENCE Adrar', 'state' =>  'W01', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Chlef', 'state' =>  'W02', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Laghouat', 'state' =>  'W03', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Oum El Boua', 'state' =>  'W04', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Batna', 'state' =>  'W05', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Béjaïa', 'state' =>  'W06', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Biskra', 'state' =>  'W07', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Béchar', 'state' =>  'W08', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Blida', 'state' =>  'W09', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Bouira', 'state' =>  'W10', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tamanrasse', 'state' =>  'W11', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tébessa', 'state' =>  'W12', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tlemcen', 'state' =>  'W13', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tiaret', 'state' =>  'W14', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tizi Ouzou', 'state' =>  'W15', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Alger', 'state' =>  'W16', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Djelfa', 'state' =>  'W17', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Jijel', 'state' =>  'W18', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Sétif', 'state' =>  'W19', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Saïda', 'state' =>  'W20', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Skikda', 'state' =>  'W21', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Sidi Bel Abbes', 'state' =>  'W22', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Annaba', 'state' =>  'W23', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Guelma', 'state' =>  'W24', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Constantin', 'state' =>  'W25', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Médéa', 'state' =>  'W26', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Mostaganem', 'state' =>  'W27', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE MSila', 'state' =>  'W28', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Mascara', 'state' =>  'W29', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Ouargla', 'state' =>  'W30', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Oran', 'state' =>  'W31', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE El Bayadh', 'state' =>  'W32', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Illizi', 'state' =>  'W33', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Bordj Bou Arreridj', 'state' =>  'W34', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Boumerdès', 'state' =>  'W35', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE El Tarf', 'state' =>  'W36', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tindouf', 'state' =>  'W37', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tissemsilt', 'state' =>  'W38', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE El Oued', 'state' =>  'W39', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Khenchela', 'state' =>  'W40', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Souk Ahras', 'state' =>  'W41', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Tipaza', 'state' =>  'W42', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Mila', 'state' =>  'W43', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Aïn Defla', 'state' =>  'W44', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Naâma', 'state' =>  'W45', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Aïn Témouch', 'state' =>  'W46', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Ghardaïa', 'state' =>  'W47', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AGENCE Relizane', 'state' =>  'W48', 'structure_type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DIRECTION GENERALE', 'state' =>  'W16', 'structure_type_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PRESIDENT DE LA COMMISSION NATIONALE MEDICALE', 'state' => 'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ECOLE SUPERIEURE DE LA SECURITE SOCIALE', 'state' =>  'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ŒUVRE SOCIALE', 'state' =>  'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PRISIDENT DU CONSEIL D\'ADMINISTRATION', 'state' =>  'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MINISTERE DU TRAVAIL DE L\'EMPLOI ET DE LA SECURITE SOCIALE', 'state' =>  'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MINISTERE DE LA JUSTICE', 'state' =>  'W16', 'structure_type_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EL DJORF ED\'DAHABI (MELBOU)', 'state' =>  'W06', 'structure_type_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CENTRE FAMILIALE DE BEN AKNOUNE', 'state' =>  'W16', 'structure_type_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IMPRIMERIE DE CONSTANTINE', 'state' =>  'W25', 'structure_type_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CSORVAT MESSERGHINE', 'state' =>  'W31', 'structure_type_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EHS-CMCI BOUISMAIL', 'state' =>  'W42', 'structure_type_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
