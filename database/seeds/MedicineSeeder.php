<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            // ANALGESIK NARKOTIK 
            [
                'generic_name' => 'fentanil',
                'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
                'restriction_formula' => '5 amp/kasus.',
                'price' => 10000,
                'image' => 'fentanil_inj005.jpg',
                'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1
            ],
            [
                'generic_name' => 'fentanil',
                'form' => 'patch 12,5 mcg/jam',
                'restriction_formula' => '10 patch/bulan.',
                'price' => 10000,
                'image' => 'fentanilpatch125.jpg',
                'description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali. - Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1
            ],
            [
                'generic_name' => 'fentanil',
                'form' => 'patch 25 mcg/jam',
                'restriction_formula' => '10 patch/bulan.',
                'price' => 10000,
                'image' => 'fentanil_inj25.jpg',
                'description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali. - Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1
            ],
            // ANALGESIK NON NARKOTIK 
            [
                'generic_name' => 'asam mefenamat',
                'form' => 'kaps 250 mg',
                'restriction_formula' => '30 kaps/bulan.',
                'price' => 12000,
                'image' => 'asammefenamat250.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2
            ],
            [
                'generic_name' => 'asam mefenamat',
                'form' => 'tab 500 mg',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 24000,
                'image' => 'asammefenamat500.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2
            ],
            [
                'generic_name' => 'ibuprofen*',
                'form' => 'tab 200 mg',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 8500,
                'image' => 'ibuprofentab200mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2
            ],
            // ANTIPIRAI
            [
                'generic_name' => 'alopurinol',
                'form' => 'tab 100 mg*',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 22500,
                'image' => 'alopurinoltab100mg.jpg',
                'description' => 'Tidak diberikan pada saat nyeri akut.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3
            ],
            [
                'generic_name' => 'kolkisin',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 15000,
                'image' => 'kolkisintab500mcg.png',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3
            ],
            [
                'generic_name' => 'probenesid',
                'form' => 'tab 500 mg',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 20000,
                'image' => 'probenesidtab500mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3
            ],
            // NYERI NEUROPATIK
            [
                'generic_name' => 'amitriptilin',
                'form' => 'tab 25 mg',
                'restriction_formula' => '30 tab/bulan.',
                'price' => 55000,
                'image' => 'Amitriptyline-25mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4
            ],
            [
                'generic_name' => 'gabapentin',
                'form' => 'kaps 100 mg',
                'restriction_formula' => '60 kaps/bulan.',
                'price' => 15000,
                'image' => 'gabapentinkaps100mg.jpg',
                'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4
            ],
            [
                'generic_name' => 'karbamazepin',
                'form' => 'tab 100 mg',
                'restriction_formula' => '60 tab/bulan.',
                'price' => 23000,
                'image' => 'karbamazepintab100mg.jpg',
                'description' => 'Hanya untuk neuralgia trigeminal.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4
            ],
            // ANESTETIK LOKAL
            [
                'generic_name' => 'bupivakain',
                'form' => 'inj 0,5%',
                'restriction_formula' => '',
                'price' => 20000,
                'image' => 'bupivakaininj05.jpg',
                'description' => '',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5
            ],
            [
                'generic_name' => 'bupivakain heavy',
                'form' => 'inj 0,5% + glukosa 8%',
                'restriction_formula' => '',
                'price' => 30000,
                'image' => 'bupivakainheavy.jpg',
                'description' => '',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5
            ],
            [
                'generic_name' => 'etil klorida',
                'form' => 'spray 100 mL',
                'restriction_formula' => '',
                'price' => 230000,
                'image' => 'etilkloridaspray100ml.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5
            ],
            // ANESTETIK UMUM dan OKSIGEN
            [
                'generic_name' => 'deksmedetomidin',
                'form' => 'inj 100 mcg/mL',
                'restriction_formula' => 'deksmedetomidininj100.jpg',
                'price' => 20000,
                'image' => 'deksmedetomidininj100mcgmL.jpg',
                'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6
            ],
            [
                'generic_name' => 'desfluran',
                'form' => 'ih',
                'restriction_formula' => '',
                'price' => 10000,
                'image' => 'desfluranih.jpg',
                'description' => '',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6
            ],
            [
                'generic_name' => 'ketamin',
                'form' => 'inj 50 mg/mL (i.v.)',
                'restriction_formula' => '',
                'price' => 100000,
                'image' => 'ketamininj50mgml.jpg',
                'description' => '',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6
            ],
            // OBAT untuk PROSEDUR PRE OPERATIF
            [
                'generic_name' => 'atropin',
                'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
                'restriction_formula' => '',
                'price' => 425000,
                'image' => 'atropininj025.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7
            ],
            [
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '',
                'price' => 30000,
                'image' => 'diazepaminj5mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7
            ],
            [
                'generic_name' => 'midazolam',
                'form' => 'inj 1 mg/mL (i.v.)',
                'restriction_formula' => '- Dosis rumatan: 1 mg/jam (24mg/hari). - Dosis premedikasi: 8 vial/kasus.',
                'price' => 45000,
                'image' => 'midazolaminj1mg.jpg',
                'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7
            ],
            // ANTIALERGI dan OBAT untuk ANAFILAKSIS
            [
                'generic_name' => 'deksametason',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '20 mg/hari.',
                'price' => 1500,
                'image' => 'deksametasoninj5mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8
            ],
            [
                'generic_name' => 'difenhidramin',
                'form' => 'inj 10 mg/mL (i.v./i.m.)',
                'restriction_formula' => '30 mg/hari.',
                'price' => 20000,
                'image' => 'difenhidramininj10mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8
            ],
            [
                'generic_name' => 'epinefrin (adrenalin)',
                'form' => 'inj 1 mg/mL',
                'restriction_formula' => '',
                'price' => 55300,
                'image' => 'epinefrinadrenalininj1mgml.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8
            ],
            // KHUSUS
            [
                'generic_name' => 'atropin',
                'form' => 'tab 0,5 mg',
                'restriction_formula' => '',
                'price' => 70000,
                'image' => 'atropintab05mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9
            ],
            [
                'generic_name' => 'kalsium glukonat',
                'form' => 'inj 10%',
                'restriction_formula' => '',
                'price' => 220000,
                'image' => 'kalsiumglukonat10.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9
            ],
            [
                'generic_name' => 'efedrin',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => '',
                'price' => 32000,
                'image' => 'efedrininj50mgml.jpg',
                'description' => '',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9
            ],
            // ANTIEPILEPSI - ANTIKONVULSI
            [
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
                'price' => 30000,
                'image' => 'diazepaminj5mgml.png',
                'description' => 'Tidak untuk i.m.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10
            ],
            [
                'generic_name' => 'fenitoin',
                'form' => 'kaps 30 mg*',
                'restriction_formula' => '90 kaps/bulan.',
                'price' => 45000,
                'image' => 'fenitoinkaps30mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10
            ],
            [
                'generic_name' => 'fenobarbital',
                'form' => 'tab 30 mg*',
                'restriction_formula' => '120 tab/bulan.',
                'price' => 50000,
                'image' => 'fenobarbitaltab30mg.jpg',
                'description' => '',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10
            ]
        ]);
    }
}
