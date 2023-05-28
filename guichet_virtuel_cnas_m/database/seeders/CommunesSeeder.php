<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunesSeeder extends Seeder
{
    private $communes = [
        [
            'name' => 'Adrar',
            'code' => 'C00',
            'state_id' => '01',
        ],
        [
            'name' => 'Aoulef',
            'code' => 'C01',
            'state_id' => '01',
        ],
        [
            'name' => 'Aougrout',
            'code' => 'C02',
            'state_id' => '49',
        ],
        [
            'name' => 'Bordj Badji Mokhtar',
            'code' => 'C03',
            'state_id' => '50',
        ],
        [
            'name' => 'Charouine',
            'code' => 'C04',
            'state_id' => '49',
        ],
        [
            'name' => 'Fenoughil',
            'code' => 'C05',
            'state_id' => '01',
        ],
        [
            'name' => 'Zaouiat Kounta',
            'code' => 'C06',
            'state_id' => '01',
        ],
        [
            'name' => 'Tinerkouk',
            'code' => 'C07',
            'state_id' => '49',
        ],
        [
            'name' => 'Timimoun',
            'code' => 'C08',
            'state_id' => '49',
        ],
        [
            'name' => 'Reggane',
            'code' => 'C09',
            'state_id' => '01',
        ],
        [
            'name' => 'Tsabit',
            'code' => 'C10',
            'state_id' => '01',
        ],
        [
            'name' => 'Abou El Hassane',
            'code' => 'C11',
            'state_id' => '02',
        ],
        [
            'name' => 'Ain Merane',
            'code' => 'C12',
            'state_id' => '02',
        ],
        [
            'name' => 'Zeboudja',
            'code' => 'C13',
            'state_id' => '02',
        ],
        [
            'name' => 'El Karimia',
            'code' => 'C14',
            'state_id' => '02',
        ],
        [
            'name' => 'Beni Haoua',
            'code' => 'C15',
            'state_id' => '02',
        ],
        [
            'name' => 'Oued Fodda',
            'code' => 'C16',
            'state_id' => '02',
        ],
        [
            'name' => 'Boukadir',
            'code' => 'C17',
            'state_id' => '02',
        ],
        [
            'name' => 'Ouled Fares',
            'code' => 'C18',
            'state_id' => '02',
        ],
        [
            'name' => 'Chlef',
            'code' => 'C19',
            'state_id' => '02',
        ],
        [
            'name' => 'Taougrit',
            'code' => 'C20',
            'state_id' => '02',
        ],
        [
            'name' => 'Ouled Ben Abdelkader',
            'code' => 'C21',
            'state_id' => '02',
        ],
        [
            'name' => 'El Marsa',
            'code' => 'C22',
            'state_id' => '02',
        ],
        [
            'name' => 'Tenes',
            'code' => 'C23',
            'state_id' => '02',
        ],
        [
            'name' => 'Aflou',
            'code' => 'C24',
            'state_id' => '03',
        ],
        [
            'name' => 'Ain Madhi',
            'code' => 'C25',
            'state_id' => '03',
        ],
        [
            'name' => 'Gueltat Sidi Saad',
            'code' => 'C26',
            'state_id' => '03',
        ],
        [
            'name' => 'Ksar El Hirane',
            'code' => 'C27',
            'state_id' => '03',
        ],
        [
            'name' => 'Brida',
            'code' => 'C28',
            'state_id' => '03',
        ],
        [
            'name' => 'Sidi Makhlouf',
            'code' => 'C29',
            'state_id' => '03',
        ],
        [
            'name' => 'El Ghicha',
            'code' => 'C30',
            'state_id' => '03',
        ],
        [
            'name' => "Hassi R'mel",
            'code' => 'C31',
            'state_id' => '03',
        ],
        [
            'name' => 'Laghouat',
            'code' => 'C32',
            'state_id' => '03',
        ],
        [
            'name' => 'Oued Morra',
            'code' => 'C33',
            'state_id' => '03',
        ],
        [
            'name' => 'Ain Babouche',
            'code' => 'C34',
            'state_id' => '04',
        ],
        [
            'name' => 'Ain Beida',
            'code' => 'C35',
            'state_id' => '04',
        ],
        [
            'name' => 'Ain Fekroun',
            'code' => 'C36',
            'state_id' => '04',
        ],
        [
            'name' => 'Ain Kercha',
            'code' => 'C37',
            'state_id' => '04',
        ],
        [
            'name' => "Ain M'lila",
            'code' => 'C38',
            'state_id' => '04',
        ],
        [
            'name' => 'Oum El Bouaghi',
            'code' => 'C39',
            'state_id' => '04',
        ],
        [
            'name' => 'Meskiana',
            'code' => 'C40',
            'state_id' => '04',
        ],
        [
            'name' => 'Souk Naamane',
            'code' => 'C41',
            'state_id' => '04',
        ],
        [
            'name' => 'Dhalaa',
            'code' => 'C42',
            'state_id' => '04',
        ],
        [
            'name' => 'Sigus',
            'code' => 'C43',
            'state_id' => '04',
        ],
        [
            'name' => "F'kirina",
            'code' => 'C44',
            'state_id' => '04',
        ],
        [
            'name' => 'Ksar Sbahi',
            'code' => 'C45',
            'state_id' => '04',
        ],
        [
            'name' => 'Ain Djasser',
            'code' => 'C46',
            'state_id' => '05',
        ],
        [
            'name' => 'Ain Touta',
            'code' => 'C47',
            'state_id' => '05',
        ],
        [
            'name' => 'El Madher',
            'code' => 'C48',
            'state_id' => '05',
        ],
        [
            'name' => 'Arris',
            'code' => 'C49',
            'state_id' => '05',
        ],
        [
            'name' => 'Djezzar',
            'code' => 'C50',
            'state_id' => '05',
        ],
        [
            'name' => 'Barika',
            'code' => 'C51',
            'state_id' => '05',
        ],
        [
            'name' => 'Batna',
            'code' => 'C52',
            'state_id' => '05',
        ],
        [
            'name' => 'Chemora',
            'code' => 'C53',
            'state_id' => '05',
        ],
        [
            'name' => "N'gaous",
            'code' => 'C54',
            'state_id' => '05',
        ],
        [
            'name' => 'Bouzina',
            'code' => 'C55',
            'state_id' => '05',
        ],
        [
            'name' => 'Theniet El Abed',
            'code' => 'C56',
            'state_id' => '05',
        ],
        [
            'name' => 'Ichemoul',
            'code' => 'C57',
            'state_id' => '05',
        ],
        [
            'name' => 'Tkout',
            'code' => 'C58',
            'state_id' => '05',
        ],
        [
            'name' => 'Ras El Aioun',
            'code' => 'C59',
            'state_id' => '05',
        ],
        [
            'name' => 'Merouana',
            'code' => 'C60',
            'state_id' => '05',
        ],
        [
            'name' => 'Seriana',
            'code' => 'C61',
            'state_id' => '05',
        ],
        [
            'name' => 'Ouled Si Slimane',
            'code' => 'C62',
            'state_id' => '05',
        ],
        [
            'name' => 'Menaa',
            'code' => 'C63',
            'state_id' => '05',
        ],
        [
            'name' => 'Timgad',
            'code' => 'C64',
            'state_id' => '05',
        ],
        [
            'name' => 'Tazoult',
            'code' => 'C65',
            'state_id' => '05',
        ],
        [
            'name' => 'Seggana',
            'code' => 'C66',
            'state_id' => '05',
        ],
        [
            'name' => 'Adekar',
            'code' => 'C67',
            'state_id' => '06',
        ],
        [
            'name' => 'Ighil Ali',
            'code' => 'C68',
            'state_id' => '06',
        ],
        [
            'name' => 'Darguina',
            'code' => 'C69',
            'state_id' => '06',
        ],
        [
            'name' => 'Akbou',
            'code' => 'C70',
            'state_id' => '06',
        ],
        [
            'name' => 'Chemini',
            'code' => 'C71',
            'state_id' => '06',
        ],
        [
            'name' => 'Seddouk',
            'code' => 'C72',
            'state_id' => '06',
        ],
        [
            'name' => 'Amizour',
            'code' => 'C73',
            'state_id' => '06',
        ],
        [
            'name' => 'Aokas',
            'code' => 'C74',
            'state_id' => '06',
        ],
        [
            'name' => 'Barbacha',
            'code' => 'C75',
            'state_id' => '06',
        ],
        [
            'name' => 'Bejaia',
            'code' => 'C76',
            'state_id' => '06',
        ],
        [
            'name' => 'Tazmalt',
            'code' => 'C77',
            'state_id' => '06',
        ],
        [
            'name' => 'Beni Maouche',
            'code' => 'C78',
            'state_id' => '06',
        ],
        [
            'name' => 'Tichy',
            'code' => 'C79',
            'state_id' => '06',
        ],
        [
            'name' => 'Kherrata',
            'code' => 'C80',
            'state_id' => '06',
        ],
        [
            'name' => 'Sidi Aich',
            'code' => 'C81',
            'state_id' => '06',
        ],
        [
            'name' => 'El Kseur',
            'code' => 'C82',
            'state_id' => '06',
        ],
        [
            'name' => 'Ifri Ouzellaguene',
            'code' => 'C83',
            'state_id' => '06',
        ],
        [
            'name' => 'Souk El Tenine',
            'code' => 'C84',
            'state_id' => '06',
        ],
        [
            'name' => 'Timezrit',
            'code' => 'C85',
            'state_id' => '06',
        ],
        [
            'name' => 'Sidi Okba',
            'code' => 'C86',
            'state_id' => '07',
        ],
        [
            'name' => 'El Kantara',
            'code' => 'C87',
            'state_id' => '07',
        ],
        [
            'name' => 'Sidi Khaled',
            'code' => 'C88',
            'state_id' => '51',
        ],
        [
            'name' => 'Biskra',
            'code' => 'C89',
            'state_id' => '07',
        ],
        [
            'name' => 'Tolga',
            'code' => 'C90',
            'state_id' => '07',
        ],
        [
            'name' => 'Djemorah',
            'code' => 'C91',
            'state_id' => '07',
        ],
        [
            'name' => 'Ouled Djellal',
            'code' => 'C92',
            'state_id' => '51',
        ],
        [
            'name' => 'Zeribet El Oued',
            'code' => 'C93',
            'state_id' => '07',
        ],
        [
            'name' => 'Foughala',
            'code' => 'C94',
            'state_id' => '07',
        ],
        [
            'name' => 'El Outaya',
            'code' => 'C95',
            'state_id' => '07',
        ],
        [
            'name' => 'Ourlal',
            'code' => 'C96',
            'state_id' => '07',
        ],
        [
            'name' => 'Mechouneche',
            'code' => 'C97',
            'state_id' => '07',
        ],
        [
            'name' => 'Abadla',
            'code' => 'C98',
            'state_id' => '08',
        ],
        [
            'name' => 'Bechar',
            'code' => 'C99',
            'state_id' => '08',
        ],
        [
            'name' => 'Beni Abbes',
            'code' => 'C100',
            'state_id' => '52',
        ],
        [
            'name' => 'Kerzaz',
            'code' => 'C101',
            'state_id' => '52',
        ],
        [
            'name' => 'Beni Ounif',
            'code' => 'C102',
            'state_id' => '08',
        ],
        [
            'name' => 'Lahmar',
            'code' => 'C103',
            'state_id' => '08',
        ],
        [
            'name' => 'El Ouata',
            'code' => 'C104',
            'state_id' => '52',
        ],
        [
            'name' => 'Igli',
            'code' => 'C105',
            'state_id' => '52',
        ],
        [
            'name' => 'Kenadsa',
            'code' => 'C106',
            'state_id' => '08',
        ],
        [
            'name' => 'Ouled Khodeir',
            'code' => 'C107',
            'state_id' => '52',
        ],
        [
            'name' => 'Tabelbala',
            'code' => 'C108',
            'state_id' => '08',
        ],
        [
            'name' => 'Taghit',
            'code' => 'C109',
            'state_id' => '08',
        ],
        [
            'name' => 'Mouzaia',
            'code' => 'C110',
            'state_id' => '09',
        ],
        [
            'name' => 'Ouled Yaich',
            'code' => 'C111',
            'state_id' => '09',
        ],
        [
            'name' => 'Oued El Alleug',
            'code' => 'C112',
            'state_id' => '09',
        ],
        [
            'name' => 'Blida',
            'code' => 'C113',
            'state_id' => '09',
        ],
        [
            'name' => 'Boufarik',
            'code' => 'C114',
            'state_id' => '09',
        ],
        [
            'name' => 'Bougara',
            'code' => 'C115',
            'state_id' => '09',
        ],
        [
            'name' => 'Bouinan',
            'code' => 'C116',
            'state_id' => '09',
        ],
        [
            'name' => 'Meftah',
            'code' => 'C117',
            'state_id' => '09',
        ],
        [
            'name' => 'El Affroun',
            'code' => 'C118',
            'state_id' => '09',
        ],
        [
            'name' => 'Larbaa',
            'code' => 'C119',
            'state_id' => '09',
        ],
        [
            'name' => "M'chedallah",
            'code' => 'C120',
            'state_id' => '10',
        ],
        [
            'name' => 'Bechloul',
            'code' => 'C121',
            'state_id' => '10',
        ],
        [
            'name' => 'Ain Bessem',
            'code' => 'C122',
            'state_id' => '10',
        ],
        [
            'name' => 'Bouira',
            'code' => 'C123',
            'state_id' => '10',
        ],
        [
            'name' => 'Kadiria',
            'code' => 'C124',
            'state_id' => '10',
        ],
        [
            'name' => 'Bir Ghbalou',
            'code' => 'C125',
            'state_id' => '10',
        ],
        [
            'name' => 'Bordj Okhriss',
            'code' => 'C126',
            'state_id' => '10',
        ],
        [
            'name' => 'Lakhdaria',
            'code' => 'C127',
            'state_id' => '10',
        ],
        [
            'name' => 'Sour El Ghozlane',
            'code' => 'C128',
            'state_id' => '10',
        ],
        [
            'name' => 'El Hachimia',
            'code' => 'C129',
            'state_id' => '10',
        ],
        [
            'name' => 'Souk El Khemis',
            'code' => 'C130',
            'state_id' => '10',
        ],
        [
            'name' => 'Haizer',
            'code' => 'C131',
            'state_id' => '10',
        ],
        [
            'name' => 'Silet',
            'code' => 'C132',
            'state_id' => '11',
        ],
        [
            'name' => 'Tamanrasset',
            'code' => 'C133',
            'state_id' => '11',
        ],
        [
            'name' => 'In Guezzam',
            'code' => 'C134',
            'state_id' => '54',
        ],
        [
            'name' => 'In Salah',
            'code' => 'C135',
            'state_id' => '53',
        ],
        [
            'name' => 'Tazrouk',
            'code' => 'C136',
            'state_id' => '11',
        ],
        [
            'name' => 'In Ghar',
            'code' => 'C137',
            'state_id' => '53',
        ],
        [
            'name' => 'Tin Zouatine',
            'code' => 'C138',
            'state_id' => '54',
        ],
        [
            'name' => 'Ouenza',
            'code' => 'C139',
            'state_id' => '12',
        ],
        [
            'name' => 'El Ogla',
            'code' => 'C140',
            'state_id' => '12',
        ],
        [
            'name' => 'El Kouif',
            'code' => 'C141',
            'state_id' => '12',
        ],
        [
            'name' => 'Morsott',
            'code' => 'C142',
            'state_id' => '12',
        ],
        [
            'name' => 'Bir Mokadem',
            'code' => 'C143',
            'state_id' => '12',
        ],
        [
            'name' => 'Bir El Ater',
            'code' => 'C144',
            'state_id' => '12',
        ],
        [
            'name' => 'El Aouinet',
            'code' => 'C145',
            'state_id' => '12',
        ],
        [
            'name' => 'Cheria',
            'code' => 'C146',
            'state_id' => '12',
        ],
        [
            'name' => 'El Malabiod',
            'code' => 'C147',
            'state_id' => '12',
        ],
        [
            'name' => 'Negrine',
            'code' => 'C148',
            'state_id' => '12',
        ],
        [
            'name' => 'Oum Ali',
            'code' => 'C149',
            'state_id' => '12',
        ],
        [
            'name' => 'Tebessa',
            'code' => 'C150',
            'state_id' => '12',
        ],
        [
            'name' => 'Fellaoucene',
            'code' => 'C151',
            'state_id' => '13',
        ],
        [
            'name' => 'Chetouane',
            'code' => 'C152',
            'state_id' => '13',
        ],
        [
            'name' => 'Mansourah',
            'code' => 'C153',
            'state_id' => '13',
        ],
        [
            'name' => 'Ain Tellout',
            'code' => 'C154',
            'state_id' => '13',
        ],
        [
            'name' => 'Remchi',
            'code' => 'C155',
            'state_id' => '13',
        ],
        [
            'name' => 'Bab El Assa',
            'code' => 'C156',
            'state_id' => '13',
        ],
        [
            'name' => 'Beni Snous',
            'code' => 'C157',
            'state_id' => '13',
        ],
        [
            'name' => 'Beni Boussaid',
            'code' => 'C158',
            'state_id' => '13',
        ],
        [
            'name' => 'Honnaine',
            'code' => 'C159',
            'state_id' => '13',
        ],
        [
            'name' => 'Ouled Mimoun',
            'code' => 'C160',
            'state_id' => '13',
        ],
        [
            'name' => 'Bensekrane',
            'code' => 'C161',
            'state_id' => '13',
        ],
        [
            'name' => 'Sabra',
            'code' => 'C162',
            'state_id' => '13',
        ],
        [
            'name' => 'Sidi Djillali',
            'code' => 'C163',
            'state_id' => '13',
        ],
        [
            'name' => 'Ghazaouet',
            'code' => 'C164',
            'state_id' => '13',
        ],
        [
            'name' => 'Nedroma',
            'code' => 'C165',
            'state_id' => '13',
        ],
        [
            'name' => 'Sebdou',
            'code' => 'C166',
            'state_id' => '13',
        ],
        [
            'name' => 'Maghnia',
            'code' => 'C167',
            'state_id' => '13',
        ],
        [
            'name' => 'Hennaya',
            'code' => 'C168',
            'state_id' => '13',
        ],
        [
            'name' => 'Marsa Ben Mehdi',
            'code' => 'C169',
            'state_id' => '13',
        ],
        [
            'name' => 'Tlemcen',
            'code' => 'C170',
            'state_id' => '13',
        ],
        [
            'name' => 'Dahmouni',
            'code' => 'C171',
            'state_id' => '14',
        ],
        [
            'name' => 'Ain Deheb',
            'code' => 'C172',
            'state_id' => '14',
        ],
        [
            'name' => 'Mahdia',
            'code' => 'C173',
            'state_id' => '14',
        ],
        [
            'name' => 'Frenda',
            'code' => 'C174',
            'state_id' => '14',
        ],
        [
            'name' => 'Ain Kermes',
            'code' => 'C175',
            'state_id' => '14',
        ],
        [
            'name' => 'Hamadia',
            'code' => 'C176',
            'state_id' => '14',
        ],
        [
            'name' => 'Mechraa Sfa',
            'code' => 'C177',
            'state_id' => '14',
        ],
        [
            'name' => 'Sougueur',
            'code' => 'C178',
            'state_id' => '14',
        ],
        [
            'name' => 'Rahouia',
            'code' => 'C179',
            'state_id' => '14',
        ],
        [
            'name' => 'Ksar Chellala',
            'code' => 'C180',
            'state_id' => '14',
        ],
        [
            'name' => 'Medroussa',
            'code' => 'C181',
            'state_id' => '14',
        ],
        [
            'name' => 'Meghila',
            'code' => 'C182',
            'state_id' => '14',
        ],
        [
            'name' => 'Oued Lili',
            'code' => 'C183',
            'state_id' => '14',
        ],
        [
            'name' => 'Tiaret',
            'code' => 'C184',
            'state_id' => '14',
        ],
        [
            'name' => 'Ain El Hammam',
            'code' => 'C185',
            'state_id' => '15',
        ],
        [
            'name' => 'Azeffoun',
            'code' => 'C186',
            'state_id' => '15',
        ],
        [
            'name' => 'Ouadhias',
            'code' => 'C187',
            'state_id' => '15',
        ],
        [
            'name' => 'Draa El Mizan',
            'code' => 'C188',
            'state_id' => '15',
        ],
        [
            'name' => 'Larbaa Nath Iraten',
            'code' => 'C189',
            'state_id' => '15',
        ],
        [
            'name' => 'Ouacif',
            'code' => 'C190',
            'state_id' => '15',
        ],
        [
            'name' => 'Mekla',
            'code' => 'C191',
            'state_id' => '15',
        ],
        [
            'name' => 'Ouaguenoun',
            'code' => 'C192',
            'state_id' => '15',
        ],
        [
            'name' => 'Beni Douala',
            'code' => 'C193',
            'state_id' => '15',
        ],
        [
            'name' => 'Tizi Rached',
            'code' => 'C194',
            'state_id' => '15',
        ],
        [
            'name' => 'Boghni',
            'code' => 'C195',
            'state_id' => '15',
        ],
        [
            'name' => 'Azazga',
            'code' => 'C196',
            'state_id' => '15',
        ],
        [
            'name' => 'Benni Yenni',
            'code' => 'C197',
            'state_id' => '15',
        ],
        [
            'name' => 'Bouzeguene',
            'code' => 'C198',
            'state_id' => '15',
        ],
        [
            'name' => 'Makouda',
            'code' => 'C199',
            'state_id' => '15',
        ],
        [
            'name' => 'Draa Ben Khedda',
            'code' => 'C200',
            'state_id' => '15',
        ],
        [
            'name' => 'Iferhounene',
            'code' => 'C201',
            'state_id' => '15',
        ],
        [
            'name' => 'Tigzirt',
            'code' => 'C202',
            'state_id' => '15',
        ],
        [
            'name' => 'Maatkas',
            'code' => 'C203',
            'state_id' => '15',
        ],
        [
            'name' => 'Tizi-Ghenif',
            'code' => 'C204',
            'state_id' => '15',
        ],
        [
            'name' => 'Tizi Ouzou',
            'code' => 'C205',
            'state_id' => '15',
        ],
        [
            'name' => 'Cheraga',
            'code' => 'C206',
            'state_id' => '16',
        ],
        [
            'name' => 'Dar El Beida',
            'code' => 'C207',
            'state_id' => '16',
        ],
        [
            'name' => "Sidi M'hamed",
            'code' => 'C208',
            'state_id' => '16',
        ],
        [
            'name' => 'Bab El Oued',
            'code' => 'C209',
            'state_id' => '16',
        ],
        [
            'name' => 'Draria',
            'code' => 'C210',
            'state_id' => '16',
        ],
        [
            'name' => 'El Harrach',
            'code' => 'C211',
            'state_id' => '16',
        ],
        [
            'name' => 'Baraki',
            'code' => 'C212',
            'state_id' => '16',
        ],
        [
            'name' => 'Bouzareah',
            'code' => 'C213',
            'state_id' => '16',
        ],
        [
            'name' => 'Bir Mourad Rais',
            'code' => 'C214',
            'state_id' => '16',
        ],
        [
            'name' => 'Birtouta',
            'code' => 'C215',
            'state_id' => '16',
        ],
        [
            'name' => 'Hussein Dey',
            'code' => 'C216',
            'state_id' => '16',
        ],
        [
            'name' => 'Rouiba',
            'code' => 'C217',
            'state_id' => '16',
        ],
        [
            'name' => 'Zeralda',
            'code' => 'C218',
            'state_id' => '16',
        ],
        [
            'name' => 'El Idrissia',
            'code' => 'C219',
            'state_id' => '17',
        ],
        [
            'name' => 'Ain El Ibel',
            'code' => 'C220',
            'state_id' => '17',
        ],
        [
            'name' => 'Had Sahary',
            'code' => 'C221',
            'state_id' => '17',
        ],
        [
            'name' => 'Hassi Bahbah',
            'code' => 'C222',
            'state_id' => '17',
        ],
        [
            'name' => 'Ain Oussera',
            'code' => 'C223',
            'state_id' => '17',
        ],
        [
            'name' => 'Faidh El Botma',
            'code' => 'C224',
            'state_id' => '17',
        ],
        [
            'name' => 'Birine',
            'code' => 'C225',
            'state_id' => '17',
        ],
        [
            'name' => 'Charef',
            'code' => 'C226',
            'state_id' => '17',
        ],
        [
            'name' => 'Dar Chioukh',
            'code' => 'C227',
            'state_id' => '17',
        ],
        [
            'name' => 'Messaad',
            'code' => 'C228',
            'state_id' => '17',
        ],
        [
            'name' => 'Djelfa',
            'code' => 'C229',
            'state_id' => '17',
        ],
        [
            'name' => 'Sidi Laadjel',
            'code' => 'C230',
            'state_id' => '17',
        ],
        [
            'name' => 'Chekfa',
            'code' => 'C231',
            'state_id' => '18',
        ],
        [
            'name' => 'Djimla',
            'code' => 'C232',
            'state_id' => '18',
        ],
        [
            'name' => 'El Ancer',
            'code' => 'C233',
            'state_id' => '18',
        ],
        [
            'name' => 'Taher',
            'code' => 'C234',
            'state_id' => '18',
        ],
        [
            'name' => 'El Aouana',
            'code' => 'C235',
            'state_id' => '18',
        ],
        [
            'name' => 'El Milia',
            'code' => 'C236',
            'state_id' => '18',
        ],
        [
            'name' => 'Ziamah Mansouriah',
            'code' => 'C237',
            'state_id' => '18',
        ],
        [
            'name' => 'Settara',
            'code' => 'C238',
            'state_id' => '18',
        ],
        [
            'name' => 'Jijel',
            'code' => 'C239',
            'state_id' => '18',
        ],
        [
            'name' => 'Texenna',
            'code' => 'C240',
            'state_id' => '18',
        ],
        [
            'name' => 'Sidi Marouf',
            'code' => 'C241',
            'state_id' => '18',
        ],
        [
            'name' => 'Ain Arnat',
            'code' => 'C242',
            'state_id' => '19',
        ],
        [
            'name' => 'Ain Azel',
            'code' => 'C243',
            'state_id' => '19',
        ],
        [
            'name' => 'Ain El Kebira',
            'code' => 'C244',
            'state_id' => '19',
        ],
        [
            'name' => 'Ain Oulmene',
            'code' => 'C245',
            'state_id' => '19',
        ],
        [
            'name' => 'Beni Ourtilane',
            'code' => 'C246',
            'state_id' => '19',
        ],
        [
            'name' => 'Bougaa',
            'code' => 'C247',
            'state_id' => '19',
        ],
        [
            'name' => 'Beni Aziz',
            'code' => 'C248',
            'state_id' => '19',
        ],
        [
            'name' => 'Bouandas',
            'code' => 'C249',
            'state_id' => '19',
        ],
        [
            'name' => 'Amoucha',
            'code' => 'C250',
            'state_id' => '19',
        ],
        [
            'name' => 'Babor',
            'code' => 'C251',
            'state_id' => '19',
        ],
        [
            'name' => 'El Eulma',
            'code' => 'C252',
            'state_id' => '19',
        ],
        [
            'name' => 'Bir El Arch',
            'code' => 'C253',
            'state_id' => '19',
        ],
        [
            'name' => 'Djemila',
            'code' => 'C254',
            'state_id' => '19',
        ],
        [
            'name' => 'Salah Bey',
            'code' => 'C255',
            'state_id' => '19',
        ],
        [
            'name' => 'Hammam Guergour',
            'code' => 'C256',
            'state_id' => '19',
        ],
        [
            'name' => 'Guenzet',
            'code' => 'C257',
            'state_id' => '19',
        ],
        [
            'name' => 'Guidjel',
            'code' => 'C258',
            'state_id' => '19',
        ],
        [
            'name' => 'Hammam Sokhna',
            'code' => 'C259',
            'state_id' => '19',
        ],
        [
            'name' => 'Maoklane',
            'code' => 'C260',
            'state_id' => '19',
        ],
        [
            'name' => 'Setif',
            'code' => 'C261',
            'state_id' => '19',
        ],
        [
            'name' => 'Ain El Hadjar',
            'code' => 'C262',
            'state_id' => '20',
        ],
        [
            'name' => 'El Hassasna',
            'code' => 'C263',
            'state_id' => '20',
        ],
        [
            'name' => 'Ouled Brahim',
            'code' => 'C264',
            'state_id' => '20',
        ],
        [
            'name' => 'Youb',
            'code' => 'C265',
            'state_id' => '20',
        ],
        [
            'name' => 'Sidi Boubekeur',
            'code' => 'C266',
            'state_id' => '20',
        ],
        [
            'name' => 'Saida',
            'code' => 'C267',
            'state_id' => '20',
        ],
        [
            'name' => 'Sidi Mezghiche',
            'code' => 'C268',
            'state_id' => '21',
        ],
        [
            'name' => 'Azzaba',
            'code' => 'C269',
            'state_id' => '21',
        ],
        [
            'name' => 'Ain Kechra',
            'code' => 'C270',
            'state_id' => '21',
        ],
        [
            'name' => 'El Hadaiek',
            'code' => 'C271',
            'state_id' => '21',
        ],
        [
            'name' => 'Ben Azzouz',
            'code' => 'C272',
            'state_id' => '21',
        ],
        [
            'name' => 'Ramdane Djamel',
            'code' => 'C273',
            'state_id' => '21',
        ],
        [
            'name' => 'Collo',
            'code' => 'C274',
            'state_id' => '21',
        ],
        [
            'name' => 'Tamalous',
            'code' => 'C275',
            'state_id' => '21',
        ],
        [
            'name' => 'El Harrouch',
            'code' => 'C276',
            'state_id' => '21',
        ],
        [
            'name' => 'Skikda',
            'code' => 'C277',
            'state_id' => '21',
        ],
        [
            'name' => 'Zitouna',
            'code' => 'C278',
            'state_id' => '21',
        ],
        [
            'name' => 'Ouled Attia',
            'code' => 'C279',
            'state_id' => '21',
        ],
        [
            'name' => 'Oum Toub',
            'code' => 'C280',
            'state_id' => '21',
        ],
        [
            'name' => 'Ain El Berd',
            'code' => 'C281',
            'state_id' => '22',
        ],
        [
            'name' => 'Sidi Ali Boussidi',
            'code' => 'C282',
            'state_id' => '22',
        ],
        [
            'name' => 'Tessala',
            'code' => 'C283',
            'state_id' => '22',
        ],
        [
            'name' => 'Moulay Slissen',
            'code' => 'C284',
            'state_id' => '22',
        ],
        [
            'name' => 'Sfisef',
            'code' => 'C285',
            'state_id' => '22',
        ],
        [
            'name' => 'Sidi Lahcene',
            'code' => 'C286',
            'state_id' => '22',
        ],
        [
            'name' => 'Ben Badis',
            'code' => 'C287',
            'state_id' => '22',
        ],
        [
            'name' => 'Mostefa Ben Brahim',
            'code' => 'C288',
            'state_id' => '22',
        ],
        [
            'name' => 'Tenira',
            'code' => 'C289',
            'state_id' => '22',
        ],
        [
            'name' => 'Marhoum',
            'code' => 'C290',
            'state_id' => '22',
        ],
        [
            'name' => 'Sidi Ali Ben Youb',
            'code' => 'C291',
            'state_id' => '22',
        ],
        [
            'name' => 'Telagh',
            'code' => 'C292',
            'state_id' => '22',
        ],
        [
            'name' => 'Merine',
            'code' => 'C293',
            'state_id' => '22',
        ],
        [
            'name' => 'Ras El Ma',
            'code' => 'C294',
            'state_id' => '22',
        ],
        [
            'name' => 'Sidi Bel Abbes',
            'code' => 'C295',
            'state_id' => '22',
        ],
        [
            'name' => 'Ain El Berda',
            'code' => 'C296',
            'state_id' => '23',
        ],
        [
            'name' => 'Annaba',
            'code' => 'C297',
            'state_id' => '23',
        ],
        [
            'name' => 'Berrahal',
            'code' => 'C298',
            'state_id' => '23',
        ],
        [
            'name' => 'Chetaibi',
            'code' => 'C299',
            'state_id' => '23',
        ],
        [
            'name' => 'El Bouni',
            'code' => 'C300',
            'state_id' => '23',
        ],
        [
            'name' => 'El Hadjar',
            'code' => 'C301',
            'state_id' => '23',
        ],
        [
            'name' => 'Bouchegouf',
            'code' => 'C302',
            'state_id' => '24',
        ],
        [
            'name' => 'Ain Makhlouf',
            'code' => 'C303',
            'state_id' => '24',
        ],
        [
            'name' => 'Oued Zenati',
            'code' => 'C304',
            'state_id' => '24',
        ],
        [
            'name' => 'Khezaras',
            'code' => 'C305',
            'state_id' => '24',
        ],
        [
            'name' => 'Guelaat Bousbaa',
            'code' => 'C306',
            'state_id' => '24',
        ],
        [
            'name' => 'Guelma',
            'code' => 'C307',
            'state_id' => '24',
        ],
        [
            'name' => 'Hammam Debagh',
            'code' => 'C308',
            'state_id' => '24',
        ],
        [
            'name' => 'Heliopolis',
            'code' => 'C309',
            'state_id' => '24',
        ],
        [
            'name' => "Hammam N'bails",
            'code' => 'C310',
            'state_id' => '24',
        ],
        [
            'name' => 'Ain Hessainia',
            'code' => 'C311',
            'state_id' => '24',
        ],
        [
            'name' => 'Ain Abid',
            'code' => 'C312',
            'state_id' => '25',
        ],
        [
            'name' => 'El Khroub',
            'code' => 'C313',
            'state_id' => '25',
        ],
        [
            'name' => 'Zighoud Youcef',
            'code' => 'C314',
            'state_id' => '25',
        ],
        [
            'name' => 'Constantine',
            'code' => 'C315',
            'state_id' => '25',
        ],
        [
            'name' => 'Hamma Bouziane',
            'code' => 'C316',
            'state_id' => '25',
        ],
        [
            'name' => 'Ibn Ziad',
            'code' => 'C317',
            'state_id' => '25',
        ],
        [
            'name' => 'Ain Boucif',
            'code' => 'C318',
            'state_id' => '26',
        ],
        [
            'name' => 'Chellalat El Adhaoura',
            'code' => 'C319',
            'state_id' => '26',
        ],
        [
            'name' => 'Tablat',
            'code' => 'C320',
            'state_id' => '26',
        ],
        [
            'name' => 'Aziz',
            'code' => 'C321',
            'state_id' => '26',
        ],
        [
            'name' => 'El Omaria',
            'code' => 'C322',
            'state_id' => '26',
        ],
        [
            'name' => 'Ouzera',
            'code' => 'C323',
            'state_id' => '26',
        ],
        [
            'name' => 'Beni Slimane',
            'code' => 'C324',
            'state_id' => '26',
        ],
        [
            'name' => 'Berrouaghia',
            'code' => 'C325',
            'state_id' => '26',
        ],
        [
            'name' => 'Guelb El Kebir',
            'code' => 'C326',
            'state_id' => '26',
        ],
        [
            'name' => 'Ouled Antar',
            'code' => 'C327',
            'state_id' => '26',
        ],
        [
            'name' => 'Chahbounia',
            'code' => 'C328',
            'state_id' => '26',
        ],
        [
            'name' => 'Si Mahdjoub',
            'code' => 'C329',
            'state_id' => '26',
        ],
        [
            'name' => 'Sidi Naamane',
            'code' => 'C330',
            'state_id' => '26',
        ],
        [
            'name' => 'Souaghi',
            'code' => 'C331',
            'state_id' => '26',
        ],
        [
            'name' => 'Medea',
            'code' => 'C332',
            'state_id' => '26',
        ],
        [
            'name' => 'El Azizia',
            'code' => 'C333',
            'state_id' => '26',
        ],
        [
            'name' => 'Ouamri',
            'code' => 'C334',
            'state_id' => '26',
        ],
        [
            'name' => 'Ksar El Boukhari',
            'code' => 'C335',
            'state_id' => '26',
        ],
        [
            'name' => 'Seghouane',
            'code' => 'C336',
            'state_id' => '26',
        ],
        [
            'name' => 'Achaacha',
            'code' => 'C337',
            'state_id' => '27',
        ],
        [
            'name' => 'Kheir Eddine',
            'code' => 'C338',
            'state_id' => '27',
        ],
        [
            'name' => 'Ain Nouicy',
            'code' => 'C339',
            'state_id' => '27',
        ],
        [
            'name' => 'Mesra',
            'code' => 'C340',
            'state_id' => '27',
        ],
        [
            'name' => 'Ain Tedeles',
            'code' => 'C341',
            'state_id' => '27',
        ],
        [
            'name' => 'Sidi Lakhdar',
            'code' => 'C342',
            'state_id' => '27',
        ],
        [
            'name' => 'Bouguirat',
            'code' => 'C343',
            'state_id' => '27',
        ],
        [
            'name' => 'Hassi Mameche',
            'code' => 'C344',
            'state_id' => '27',
        ],
        [
            'name' => 'Mostaganem',
            'code' => 'C345',
            'state_id' => '27',
        ],
        [
            'name' => 'Sidi Ali',
            'code' => 'C346',
            'state_id' => '27',
        ],
        [
            'name' => 'Ain El Hadjel',
            'code' => 'C347',
            'state_id' => '28',
        ],
        [
            'name' => 'Ain El Melh',
            'code' => 'C348',
            'state_id' => '28',
        ],
        [
            'name' => 'Magra',
            'code' => 'C349',
            'state_id' => '28',
        ],
        [
            'name' => 'Ben Srour',
            'code' => 'C350',
            'state_id' => '28',
        ],
        [
            'name' => 'Sidi Aissa',
            'code' => 'C351',
            'state_id' => '28',
        ],
        [
            'name' => 'Ouled Sidi Brahim',
            'code' => 'C352',
            'state_id' => '28',
        ],
        [
            'name' => 'Bousaada',
            'code' => 'C353',
            'state_id' => '28',
        ],
        [
            'name' => 'Chellal',
            'code' => 'C354',
            'state_id' => '28',
        ],
        [
            'name' => 'Djebel Messaad',
            'code' => 'C355',
            'state_id' => '28',
        ],
        [
            'name' => 'Khoubana',
            'code' => 'C356',
            'state_id' => '28',
        ],
        [
            'name' => 'Hammam Dalaa',
            'code' => 'C357',
            'state_id' => '28',
        ],
        [
            'name' => 'Ouled Derradj',
            'code' => 'C358',
            'state_id' => '28',
        ],
        [
            'name' => 'Medjedel',
            'code' => 'C359',
            'state_id' => '28',
        ],
        [
            'name' => "M'sila",
            'code' => 'C360',
            'state_id' => '28',
        ],
        [
            'name' => 'Sidi Ameur',
            'code' => 'C361',
            'state_id' => '28',
        ],
        [
            'name' => 'Ain Fares',
            'code' => 'C362',
            'state_id' => '29',
        ],
        [
            'name' => 'Ain Fekan',
            'code' => 'C363',
            'state_id' => '29',
        ],
        [
            'name' => 'Oued El Abtal',
            'code' => 'C364',
            'state_id' => '29',
        ],
        [
            'name' => 'Oggaz',
            'code' => 'C365',
            'state_id' => '29',
        ],
        [
            'name' => 'Aouf',
            'code' => 'C366',
            'state_id' => '29',
        ],
        [
            'name' => 'Sig',
            'code' => 'C367',
            'state_id' => '29',
        ],
        [
            'name' => 'Bouhanifia',
            'code' => 'C368',
            'state_id' => '29',
        ],
        [
            'name' => 'El Bordj',
            'code' => 'C369',
            'state_id' => '29',
        ],
        [
            'name' => 'Zahana',
            'code' => 'C370',
            'state_id' => '29',
        ],
        [
            'name' => 'Mohammadia',
            'code' => 'C371',
            'state_id' => '29',
        ],
        [
            'name' => 'Hachem',
            'code' => 'C372',
            'state_id' => '29',
        ],
        [
            'name' => 'Tizi',
            'code' => 'C373',
            'state_id' => '29',
        ],
        [
            'name' => 'Ghriss',
            'code' => 'C374',
            'state_id' => '29',
        ],
        [
            'name' => 'Oued Taria',
            'code' => 'C375',
            'state_id' => '29',
        ],
        [
            'name' => 'Mascara',
            'code' => 'C376',
            'state_id' => '29',
        ],
        [
            'name' => 'Tighennif',
            'code' => 'C377',
            'state_id' => '29',
        ],
        [
            'name' => 'Sidi Khouiled',
            'code' => 'C378',
            'state_id' => '30',
        ],
        [
            'name' => 'Taibet',
            'code' => 'C379',
            'state_id' => '55',
        ],
        [
            'name' => 'Temacine',
            'code' => 'C380',
            'state_id' => '55',
        ],
        [
            'name' => 'El-Hadjira',
            'code' => 'C381',
            'state_id' => '55',
        ],
        [
            'name' => 'El Borma',
            'code' => 'C382',
            'state_id' => '30',
        ],
        [
            'name' => 'Hassi Messaoud',
            'code' => 'C383',
            'state_id' => '30',
        ],
        [
            'name' => 'Megarine',
            'code' => 'C384',
            'state_id' => '55',
        ],
        [
            'name' => 'Touggourt',
            'code' => 'C385',
            'state_id' => '55',
        ],
        [
            'name' => "N'goussa",
            'code' => 'C386',
            'state_id' => '30',
        ],
        [
            'name' => 'Ouargla',
            'code' => 'C387',
            'state_id' => '30',
        ],
        [
            'name' => 'Bethioua',
            'code' => 'C388',
            'state_id' => '31',
        ],
        [
            'name' => 'Boutlelis',
            'code' => 'C389',
            'state_id' => '31',
        ],
        [
            'name' => 'Ain Turk',
            'code' => 'C390',
            'state_id' => '31',
        ],
        [
            'name' => 'Arzew',
            'code' => 'C391',
            'state_id' => '31',
        ],
        [
            'name' => 'Gdyel',
            'code' => 'C392',
            'state_id' => '31',
        ],
        [
            'name' => 'Bir El Djir',
            'code' => 'C393',
            'state_id' => '31',
        ],
        [
            'name' => 'Oued Tlelat',
            'code' => 'C394',
            'state_id' => '31',
        ],
        [
            'name' => 'Es Senia',
            'code' => 'C395',
            'state_id' => '31',
        ],
        [
            'name' => 'Oran',
            'code' => 'C396',
            'state_id' => '31',
        ],
        [
            'name' => 'Labiodh Sidi Cheikh',
            'code' => 'C397',
            'state_id' => '32',
        ],
        [
            'name' => 'Boualem',
            'code' => 'C398',
            'state_id' => '32',
        ],
        [
            'name' => 'Bougtoub',
            'code' => 'C399',
            'state_id' => '32',
        ],
        [
            'name' => 'Boussemghoun',
            'code' => 'C400',
            'state_id' => '32',
        ],
        [
            'name' => 'Brezina',
            'code' => 'C401',
            'state_id' => '32',
        ],
        [
            'name' => 'Rogassa',
            'code' => 'C402',
            'state_id' => '32',
        ],
        [
            'name' => 'Chellala',
            'code' => 'C403',
            'state_id' => '32',
        ],
        [
            'name' => 'El Bayadh',
            'code' => 'C404',
            'state_id' => '32',
        ],
        [
            'name' => 'Djanet',
            'code' => 'C405',
            'state_id' => '56',
        ],
        [
            'name' => 'In Amenas',
            'code' => 'C406',
            'state_id' => '33',
        ],
        [
            'name' => 'Illizi',
            'code' => 'C407',
            'state_id' => '33',
        ],
        [
            'name' => 'Ain Taghrout',
            'code' => 'C408',
            'state_id' => '34',
        ],
        [
            'name' => 'Ras El Oued',
            'code' => 'C409',
            'state_id' => '34',
        ],
        [
            'name' => 'Bordj Bou Arreridj',
            'code' => 'C410',
            'state_id' => '34',
        ],
        [
            'name' => 'Bordj Ghedir',
            'code' => 'C411',
            'state_id' => '34',
        ],
        [
            'name' => 'Mansourah',
            'code' => 'C412',
            'state_id' => '34',
        ],
        [
            'name' => 'Bir Kasdali',
            'code' => 'C413',
            'state_id' => '34',
        ],
        [
            'name' => 'Bordj Zemmoura',
            'code' => 'C414',
            'state_id' => '34',
        ],
        [
            'name' => 'Djaafra',
            'code' => 'C415',
            'state_id' => '34',
        ],
        [
            'name' => 'El Hamadia',
            'code' => 'C416',
            'state_id' => '34',
        ],
        [
            'name' => 'Medjana',
            'code' => 'C417',
            'state_id' => '34',
        ],
        [
            'name' => 'Dellys',
            'code' => 'C418',
            'state_id' => '35',
        ],
        [
            'name' => 'Thenia',
            'code' => 'C419',
            'state_id' => '35',
        ],
        [
            'name' => 'Baghlia',
            'code' => 'C420',
            'state_id' => '35',
        ],
        [
            'name' => 'Bordj Menaiel',
            'code' => 'C421',
            'state_id' => '35',
        ],
        [
            'name' => 'Boudouaou',
            'code' => 'C422',
            'state_id' => '35',
        ],
        [
            'name' => 'Boumerdes',
            'code' => 'C423',
            'state_id' => '35',
        ],
        [
            'name' => 'Isser',
            'code' => 'C424',
            'state_id' => '35',
        ],
        [
            'name' => 'Khemis El Khechna',
            'code' => 'C425',
            'state_id' => '35',
        ],
        [
            'name' => 'Naciria',
            'code' => 'C426',
            'state_id' => '35',
        ],
        [
            'name' => 'El Tarf',
            'code' => 'C427',
            'state_id' => '36',
        ],
        [
            'name' => 'Bouhadjar',
            'code' => 'C428',
            'state_id' => '36',
        ],
        [
            'name' => 'Besbes',
            'code' => 'C429',
            'state_id' => '36',
        ],
        [
            'name' => "Ben M'hidi",
            'code' => 'C430',
            'state_id' => '36',
        ],
        [
            'name' => 'Bouteldja',
            'code' => 'C431',
            'state_id' => '36',
        ],
        [
            'name' => 'Drean',
            'code' => 'C432',
            'state_id' => '36',
        ],
        [
            'name' => 'El Kala',
            'code' => 'C433',
            'state_id' => '36',
        ],
        [
            'name' => 'Tindouf',
            'code' => 'C434',
            'state_id' => '37',
        ],
        [
            'name' => 'Ammari',
            'code' => 'C435',
            'state_id' => '38',
        ],
        [
            'name' => 'Bordj Bounaama',
            'code' => 'C436',
            'state_id' => '38',
        ],
        [
            'name' => 'Bordj Emir Abdelkader',
            'code' => 'C437',
            'state_id' => '38',
        ],
        [
            'name' => 'Lazharia',
            'code' => 'C438',
            'state_id' => '38',
        ],
        [
            'name' => 'Khemisti',
            'code' => 'C439',
            'state_id' => '38',
        ],
        [
            'name' => 'Lardjem',
            'code' => 'C440',
            'state_id' => '38',
        ],
        [
            'name' => 'Tissemsilt',
            'code' => 'C441',
            'state_id' => '38',
        ],
        [
            'name' => 'Theniet El Had',
            'code' => 'C442',
            'state_id' => '38',
        ],
        [
            'name' => 'Bayadha',
            'code' => 'C443',
            'state_id' => '39',
        ],
        [
            'name' => 'Taleb Larbi',
            'code' => 'C444',
            'state_id' => '39',
        ],
        [
            'name' => 'Debila',
            'code' => 'C445',
            'state_id' => '39',
        ],
        [
            'name' => 'Djamaa',
            'code' => 'C446',
            'state_id' => '57',
        ],
        [
            'name' => 'Robbah',
            'code' => 'C447',
            'state_id' => '39',
        ],
        [
            'name' => 'El Meghaier',
            'code' => 'C448',
            'state_id' => '57',
        ],
        [
            'name' => 'El Oued',
            'code' => 'C449',
            'state_id' => '39',
        ],
        [
            'name' => 'Guemar',
            'code' => 'C450',
            'state_id' => '39',
        ],
        [
            'name' => 'Reguiba',
            'code' => 'C451',
            'state_id' => '39',
        ],
        [
            'name' => 'Hassi Khalifa',
            'code' => 'C452',
            'state_id' => '39',
        ],
        [
            'name' => 'Magrane',
            'code' => 'C453',
            'state_id' => '39',
        ],
        [
            'name' => 'Mih Ouensa',
            'code' => 'C454',
            'state_id' => '39',
        ],
        [
            'name' => 'Ain Touila',
            'code' => 'C455',
            'state_id' => '40',
        ],
        [
            'name' => 'Babar',
            'code' => 'C456',
            'state_id' => '40',
        ],
        [
            'name' => 'El Hamma',
            'code' => 'C457',
            'state_id' => '40',
        ],
        [
            'name' => 'Bouhmama',
            'code' => 'C458',
            'state_id' => '40',
        ],
        [
            'name' => 'Chechar',
            'code' => 'C459',
            'state_id' => '40',
        ],
        [
            'name' => 'Ouled Rechache',
            'code' => 'C460',
            'state_id' => '40',
        ],
        [
            'name' => 'Kais',
            'code' => 'C461',
            'state_id' => '40',
        ],
        [
            'name' => 'Khenchela',
            'code' => 'C462',
            'state_id' => '40',
        ],
        [
            'name' => 'Sedrata',
            'code' => 'C463',
            'state_id' => '41',
        ],
        [
            'name' => 'Ouled Driss',
            'code' => 'C464',
            'state_id' => '41',
        ],
        [
            'name' => 'Bir Bouhouche',
            'code' => 'C465',
            'state_id' => '41',
        ],
        [
            'name' => 'Taoura',
            'code' => 'C466',
            'state_id' => '41',
        ],
        [
            'name' => 'Haddada',
            'code' => 'C467',
            'state_id' => '41',
        ],
        [
            'name' => 'Mechroha',
            'code' => 'C468',
            'state_id' => '41',
        ],
        [
            'name' => "M'daourouche",
            'code' => 'C469',
            'state_id' => '41',
        ],
        [
            'name' => 'Merahna',
            'code' => 'C470',
            'state_id' => '41',
        ],
        [
            'name' => 'Oum El Adhaim',
            'code' => 'C471',
            'state_id' => '41',
        ],
        [
            'name' => 'Souk Ahras',
            'code' => 'C472',
            'state_id' => '41',
        ],
        [
            'name' => 'Gouraya',
            'code' => 'C473',
            'state_id' => '42',
        ],
        [
            'name' => 'Ahmar El Ain',
            'code' => 'C474',
            'state_id' => '42',
        ],
        [
            'name' => 'Bou Ismail',
            'code' => 'C475',
            'state_id' => '42',
        ],
        [
            'name' => 'Kolea',
            'code' => 'C476',
            'state_id' => '42',
        ],
        [
            'name' => 'Damous',
            'code' => 'C477',
            'state_id' => '42',
        ],
        [
            'name' => 'Cherchell',
            'code' => 'C478',
            'state_id' => '42',
        ],
        [
            'name' => 'Fouka',
            'code' => 'C479',
            'state_id' => '42',
        ],
        [
            'name' => 'Hadjout',
            'code' => 'C480',
            'state_id' => '42',
        ],
        [
            'name' => 'Sidi Amar',
            'code' => 'C481',
            'state_id' => '42',
        ],
        [
            'name' => 'Tipaza',
            'code' => 'C482',
            'state_id' => '42',
        ],
        [
            'name' => 'Oued Endja',
            'code' => 'C483',
            'state_id' => '43',
        ],
        [
            'name' => 'Ain Beida Harriche',
            'code' => 'C484',
            'state_id' => '43',
        ],
        [
            'name' => 'Chelghoum Laid',
            'code' => 'C485',
            'state_id' => '43',
        ],
        [
            'name' => 'Mila',
            'code' => 'C486',
            'state_id' => '43',
        ],
        [
            'name' => 'Terrai Bainen',
            'code' => 'C487',
            'state_id' => '43',
        ],
        [
            'name' => 'Tadjenanet',
            'code' => 'C488',
            'state_id' => '43',
        ],
        [
            'name' => 'Bouhatem',
            'code' => 'C489',
            'state_id' => '43',
        ],
        [
            'name' => 'Sidi Merouane',
            'code' => 'C490',
            'state_id' => '43',
        ],
        [
            'name' => 'Teleghma',
            'code' => 'C491',
            'state_id' => '43',
        ],
        [
            'name' => 'Ferdjioua',
            'code' => 'C492',
            'state_id' => '43',
        ],
        [
            'name' => 'Grarem Gouga',
            'code' => 'C493',
            'state_id' => '43',
        ],
        [
            'name' => 'Tassadane Haddada',
            'code' => 'C494',
            'state_id' => '43',
        ],
        [
            'name' => 'Rouached',
            'code' => 'C495',
            'state_id' => '43',
        ],
        [
            'name' => 'Hammam Righa',
            'code' => 'C496',
            'state_id' => '44',
        ],
        [
            'name' => 'El Abadia',
            'code' => 'C497',
            'state_id' => '44',
        ],
        [
            'name' => 'Ain Defla',
            'code' => 'C498',
            'state_id' => '44',
        ],
        [
            'name' => 'Ain Lechiakh',
            'code' => 'C499',
            'state_id' => '44',
        ],
        [
            'name' => 'El Amra',
            'code' => 'C500',
            'state_id' => '44',
        ],
        [
            'name' => 'Djendel',
            'code' => 'C501',
            'state_id' => '44',
        ],
        [
            'name' => 'Bathia',
            'code' => 'C502',
            'state_id' => '44',
        ],
        [
            'name' => 'Miliana',
            'code' => 'C503',
            'state_id' => '44',
        ],
        [
            'name' => 'Bordj El Emir Khaled',
            'code' => 'C504',
            'state_id' => '44',
        ],
        [
            'name' => 'Boumedfaa',
            'code' => 'C505',
            'state_id' => '44',
        ],
        [
            'name' => 'Djelida',
            'code' => 'C506',
            'state_id' => '44',
        ],
        [
            'name' => 'El Attaf',
            'code' => 'C507',
            'state_id' => '44',
        ],
        [
            'name' => 'Rouina',
            'code' => 'C508',
            'state_id' => '44',
        ],
        [
            'name' => 'Khemis',
            'code' => 'C509',
            'state_id' => '44',
        ],
        [
            'name' => 'Mecheria',
            'code' => 'C510',
            'state_id' => '45',
        ],
        [
            'name' => 'Ain Sefra',
            'code' => 'C511',
            'state_id' => '45',
        ],
        [
            'name' => 'Asla',
            'code' => 'C512',
            'state_id' => '45',
        ],
        [
            'name' => 'Moghrar',
            'code' => 'C513',
            'state_id' => '45',
        ],
        [
            'name' => 'Mekmen Ben Amar',
            'code' => 'C514',
            'state_id' => '45',
        ],
        [
            'name' => 'Naama',
            'code' => 'C515',
            'state_id' => '45',
        ],
        [
            'name' => 'Sfissifa',
            'code' => 'C516',
            'state_id' => '45',
        ],
        [
            'name' => 'Ain Kihel',
            'code' => 'C517',
            'state_id' => '46',
        ],
        [
            'name' => 'Ain Larbaa',
            'code' => 'C518',
            'state_id' => '46',
        ],
        [
            'name' => 'Ain Temouchent',
            'code' => 'C519',
            'state_id' => '46',
        ],
        [
            'name' => 'Beni Saf',
            'code' => 'C520',
            'state_id' => '46',
        ],
        [
            'name' => 'El Amria',
            'code' => 'C521',
            'state_id' => '46',
        ],
        [
            'name' => 'El Maleh',
            'code' => 'C522',
            'state_id' => '46',
        ],
        [
            'name' => 'Hammam Bou Hadjar',
            'code' => 'C523',
            'state_id' => '46',
        ],
        [
            'name' => 'Oulhassa Gheraba',
            'code' => 'C524',
            'state_id' => '46',
        ],
        [
            'name' => 'Berriane',
            'code' => 'C525',
            'state_id' => '47',
        ],
        [
            'name' => 'Bounoura',
            'code' => 'C526',
            'state_id' => '47',
        ],
        [
            'name' => 'Dhayet Ben Dhahoua',
            'code' => 'C527',
            'state_id' => '47',
        ],
        [
            'name' => 'El Menia',
            'code' => 'C528',
            'state_id' => '58',
        ],
        [
            'name' => 'Ghardaia',
            'code' => 'C529',
            'state_id' => '47',
        ],
        [
            'name' => 'El Guerrara',
            'code' => 'C530',
            'state_id' => '47',
        ],
        [
            'name' => 'Mansourah',
            'code' => 'C531',
            'state_id' => '58',
        ],
        [
            'name' => 'Mansourah',
            'code' => 'C532',
            'state_id' => '47',
        ],
        [
            'name' => 'Metlili',
            'code' => 'C533',
            'state_id' => '47',
        ],
        [
            'name' => 'Zelfana',
            'code' => 'C534',
            'state_id' => '47',
        ],
        [
            'name' => 'Yellel',
            'code' => 'C535',
            'state_id' => '48',
        ],
        [
            'name' => 'Ain Tarek',
            'code' => 'C536',
            'state_id' => '48',
        ],
        [
            'name' => 'Ammi Moussa',
            'code' => 'C537',
            'state_id' => '48',
        ],
        [
            'name' => 'El Matmar',
            'code' => 'C538',
            'state_id' => '48',
        ],
        [
            'name' => 'Relizane',
            'code' => 'C539',
            'state_id' => '48',
        ],
        [
            'name' => 'Zemmoura',
            'code' => 'C540',
            'state_id' => '48',
        ],
        [
            'name' => "Sidi M'hamed Ben Ali",
            'code' => 'C541',
            'state_id' => '48',
        ],
        [
            'name' => 'Djidiouia',
            'code' => 'C542',
            'state_id' => '48',
        ],
        [
            'name' => "El H'madna",
            'code' => 'C543',
            'state_id' => '48',
        ],
        [
            'name' => 'Mazouna',
            'code' => 'C544',
            'state_id' => '48',
        ],
        [
            'name' => 'Oued Rhiou',
            'code' => 'C545',
            'state_id' => '48',
        ],
        [
            'name' => 'Mendes',
            'code' => 'C546',
            'state_id' => '48',
        ],
        [
            'name' => 'Ramka',
            'code' => 'C547',
            'state_id' => '48',
        ],
    ];

    public function run()
    {
        DB::table('communes')->insert($this->communes);
    }
}
