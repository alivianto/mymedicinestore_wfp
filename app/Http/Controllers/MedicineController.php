<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tugas Week 4
        // Query 1 table
        // 1.tampilkan seluruh data katergori obat
        $listKategori = DB::select(DB::raw("select * from categories"));
        // 2.tampilkan seluruh nama medicines, formula, dan harga
        $listMedicines = DB::select(DB::raw("select generic_name, form, price from medicines"));

        // query inner join 2 table
        // 1.tampilkan seluruh nama medicines, formula, dan nama kategori
        $listMedAndCat = DB::select(DB::raw("select m.generic_name, m.form, c.name from medicines m inner join categories c on m.category_id = c.id"));

        // ada agregasi sum, count dengan 2 table
        // 1. Tampilkan jumlah kategori yang memiliki data medicines
        $countMedC = DB::select(DB::raw("select COUNT(DISTINCT(m.category_id)) from medicines m inner join categories c on m.category_id = c.id"));

        // 2. Tampilkan nama kategori yang tidak memiliki data medicines satupun
        $categoryNotInList = DB::select(DB::raw("select name from categories where id not in (select DISTINCT(category_id) from medicines)"));

        // 3. Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka berikan 0
        $averagePriceforEachCategory = DB::select(DB::raw("select c.id, IFNULL(avg(m.price), 0) from medicines m right join categories c on m.category_id = c.id group by c.id"));
        
        // 4. Tampilkan kategori obat yang memiliki 1 produk medinies saja
        $categoryThatHas1Product = DB::select(DB::raw("select c.name from medicines m inner join categories c on m.category_id = c.id group by c.name having count(m.id) = 1"));

        // 5. Tampilkan obat yang memiliki satu form
        //$medicineThatHasOneForm = DB::select(DB::raw(""));

        // 6. Tampilkan kategori dan nama obat yang memiliki harga termahal
        $mostExpensivePrice = DB::select(DB::raw("select m.generic_name, c.name, m.price from medicines m inner join categories c on m.category_id = c.id where m.price = (select max(price) from medicines)"));

        // Untuk Query dengan RAW
        $listData = DB::select(DB::raw("select * from medicines"));
        //var_dump();
        //print_r();
        //dd($listData); // laravel

        // Untuk Query Builder
        //$listData = DB::table('medicines')->get();

        // Untuk Query dengan Model (Eloquent)
        //$listData = Medicine::all();

        //cara 1 dengan sintaks compact
        return view('medicine.index', compact('listData'));

        //cara 2 dengan sintaks array
        //return view('medicine.index', ['data'=>$listData]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
