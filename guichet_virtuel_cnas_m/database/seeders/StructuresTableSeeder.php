<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class StructuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Adrar', 'W01', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Chlef', 'W02', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Laghouat', 'W03', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Oum El Boua', 'W04', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Batna', 'W05', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Béjaïa', 'W06', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Biskra', 'W07', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Béchar', 'W08', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Blida', 'W09', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Bouira', 'W10', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tamanrasse', 'W11', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tébessa', 'W12', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tlemcen', 'W13', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tiaret', 'W14', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tizi Ouzou', 'W15', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Alger', 'W16', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Djelfa', 'W17', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Jijel', 'W18', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Sétif', 'W19', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Saïda', 'W20', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Skikda', 'W21', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Sidi Bel Abbes', 'W22', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Annaba', 'W23', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Guelma', 'W24', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Constantin', 'W25', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Médéa', 'W26', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Mostaganem', 'W27', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE MSila', 'W28', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Mascara', 'W29', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Ouargla', 'W30', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Oran', 'W31', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE El Bayadh', 'W32', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Illizi', 'W33', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Bordj Bou Arreridj', 'W34', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Boumerdès', 'W35', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE El Tarf', 'W36', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tindouf', 'W37', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tissemsilt', 'W38', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE El Oued', 'W39', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Khenchela', 'W40', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Souk Ahras', 'W41', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Tipaza', 'W42', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Mila', 'W43', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Aïn Defla', 'W44', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Naâma', 'W45', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Aïn Témouch', 'W46', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Ghardaïa', 'W47', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('AGENCE Relizane', 'W48', 1, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('PRESIDENT DE LA COMMISSION NATIONALE MEDICALE','W16', 4, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('ECOLE SUPERIEURE DE LA SECURITE SOCIALE', 'W16',4, now(), now() )");
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('ŒUVRE SOCIALE', 'W16', 4, now(), now() )");    
        DB::statement("INSERT INTO `structures` (`name`, `state`, `structure_type_id`,`created_at`,`updated_at`) VALUES('MINISTERE DU TRAVAIL DE L\'EMPLOI ET DE LA SECURITE SOCIALE', 'W16', 4, now(), now() )");
    }
}
