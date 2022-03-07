<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'ANALGESIK NARKOTIK', 'description' => 'ANALGESIK, ANTIPIRETIK, ANTIINFLAMASI NON STEROID, ANTIPIRAI'],
            ['name' => 'ANALGESIK NON NARKOTIK', 'description' => 'ANALGESIK, ANTIPIRETIK, ANTIINFLAMASI NON STEROID, ANTIPIRAI'],
            ['name' => 'ANTIPIRAI', 'description' => 'ANALGESIK, ANTIPIRETIK, ANTIINFLAMASI NON STEROID, ANTIPIRAI'],
            ['name' => 'NYERI NEUROPATIK', 'description' => 'ANALGESIK, ANTIPIRETIK, ANTIINFLAMASI NON STEROID, ANTIPIRAI'],
            ['name' => 'ANESTETIK LOKAL', 'description' => 'ANESTETIK'],
            ['name' => 'ANESTETIK UMUM dan OKSIGEN', 'description' => 'ANESTETIK'],
            ['name' => 'OBAT untuk PROSEDUR PRE OPERATIF', 'description' => 'ANESTETIK'],
            ['name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS', 'description' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS'],
            ['name' => 'KHUSUS', 'description' => 'ANTIDOT dan OBAT LAIN untuk KERACUNAN'],
            ['name' => 'ANTIEPILEPSI - ANTIKONVULSI', 'description' => 'ANTIEPILEPSI - ANTIKONVULSI']
        ]);
    }
}
