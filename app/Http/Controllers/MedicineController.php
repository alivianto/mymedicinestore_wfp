<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

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
        // ada agregasi sum, count dengan 2 table
        //dd($medicinethathasoneformEM);
        // Untuk Query dengan RAW
        $listData = DB::select(DB::raw("select * from medicines"));
        $cdata = DB::select(DB::raw("select * from categories"));
        //var_dump();
        //print_r();
        //dd($listData); // laravel

        // Untuk Query Builder
        //$listData = DB::table('medicines')->get();

        // Untuk Query dengan Model (Eloquent)
        //$listData = Medicine::all();

        //cara 1 dengan sintaks compact
        return view('medicine.index', compact('listData', 'cdata'));

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
        $cdata = DB::select(DB::raw("select * from categories"));
        return view('medicine.create', compact('cdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Medicine();
        $data->generic_name = $request->get('generic_name');
        $data->form = $request->get('form');
        $data->restriction_formula = $request->get('restricition_formula');
        $data->price = $request->get('price');
        $data->description = $request->get('description');

        // image
        $file = $request->file('image');
        $imgFolder = 'images';
        $imgFile = time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $data->image = $imgFile;

        $data->faskes_tk1 = $request->get('faskes1');
        $data->faskes_tk2 = $request->get('faskes2');
        $data->faskes_tk3 = $request->get('faskes3');
        $data->category_id = $request->get('category');
        $data->save();
        return redirect()->route('obat.index')->with('status', 'Medicine is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        //select * from medicines where id = $medicine
        $res = Medicine::find($medicine);
        $message = "";
        if ($res) {
            // dd($res);
            // apabila ditemukan
            $message = $res;
        } else {
            // 404 - apabila tidak ditemukan
            $message = NULL;
        }
        //return view('medicine.show', compact('message'));
        return view('medicine.show', ['message' => $message]); //CI, cara universal, umum

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit($medicine)
    {
        $data = Medicine::find($medicine);
        $category = DB::select(DB::raw("select * from categories"));
        return view('medicine.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $medicine)
    {
        $data = Medicine::find($medicine);
        $data->generic_name = $request->get('generic_name');
        $data->form = $request->get('form');
        $data->restriction_formula = $request->get('restricition_formula');
        $data->price = $request->get('price');
        $data->description = $request->get('description');
        $data->faskes_tk1 = $request->get('faskes1');
        $data->faskes_tk2 = $request->get('faskes2');
        $data->faskes_tk3 = $request->get('faskes3');
        $data->category_id = $request->get('category');
        $data->save();
        return redirect()->route('obat.index')->with(
            'status',
            'Medicine data is changed'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($medicine)
    {
        $data = Medicine::find($medicine);
        try {
            $data->delete();
            return redirect()->route('obat.index')->with('status', 'Data Medicine dengan id ' . $data->id . ' berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = "Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('obat.index')->with('error', $msg);
        }
    }

    public function showAllMedicinesInnerJoinC()
    {
        // query inner join 2 table
        // 1.tampilkan seluruh nama medicines, formula, dan nama kategori
        $data = DB::select(DB::raw("select m.generic_name, m.form, c.name from medicines m inner join categories c on m.category_id = c.id"));
        $data = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->select('medicines.generic_name', 'medicines.form', 'categories.name')
            ->get();

        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->select('medicines.generic_name', 'medicines.form', 'categories.name')
            ->get();

        return view('report.list_medicines_inner_join', compact('data'));
    }

    public function showAllMedicines()
    {
        // 2.tampilkan seluruh nama medicines, formula, dan harga
        $data = DB::select(DB::raw("select generic_name, form, price from medicines"));
        $data = DB::table('medicines')->select('generic_name', 'form', 'price')->get();
        $data = Medicine::select('generic_name', 'form', 'price')->get();

        return view('report.list_medicines', compact('data'));
    }

    public function showCategoryHasMedicines()
    {
        // 1. Tampilkan jumlah kategori yang memiliki data medicines
        $data = DB::select(DB::raw("select COUNT(DISTINCT(m.category_id)) from medicines m inner join categories c on m.category_id = c.id"));
        $data = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->distinct()
            ->count('medicines.category_id');
        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->select(DB::raw('count(distinct(medicines.category_id)) as count'))
            ->get();


        return view('report.list_kategori_punya_medicines', compact('data'));
    }

    public function CategoryNameDontHaveMedicines()
    {
        // 2. Tampilkan nama kategori yang tidak memiliki data medicines satupun
        $data = DB::select(DB::raw("select name from categories where id not in (select DISTINCT(category_id) from medicines)"));
        $data = DB::table('categories')
            ->whereNotIn('id', function ($query) {
                $query->select(DB::raw('distinct(category_id)'))->from('medicines');
            })
            ->select('name')
            ->get();
        $data = Category::whereNotIn('id', function ($query) {
            $query->select(DB::raw('distinct(category_id)'))->from('medicines');
        })
            ->select('name')
            ->get();

        return view('report.list_kategori_tidak_punya_medicines', compact('data'));
    }

    public function averagePriceForEachCategory()
    {
        // 3. Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka berikan 0
        $data = DB::select(DB::raw("select c.id, IFNULL(avg(m.price), 0) from medicines m right join categories c on m.category_id = c.id group by c.id"));

        $data = DB::table('medicines')
            ->rightJoin('categories', 'medicines.category_id', '=', 'categories.id')
            ->groupBy('categories.id', 'categories.name')
            ->select('categories.id', 'categories.name', DB::raw('IFNULL(AVG(medicines.price),0) AS ratarata'))
            ->get();
        $data = Medicine::rightJoin('categories', 'medicines.category_id', '=', 'categories.id')
            ->groupBy('categories.id', 'categories.name')
            ->select('categories.id', 'categories.name', DB::raw('IFNULL(AVG(medicines.price),0) AS ratarata'))
            ->get();

        return view('report.list_average_price_for_each_category', compact('data'));
    }

    public function categoryThatHas1Product()
    {
        // 4. Tampilkan kategori obat yang memiliki 1 produk medinies saja
        $data = DB::select(DB::raw("select c.name from medicines m inner join categories c on m.category_id = c.id group by c.name having count(m.id) = 1"));

        $data = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->having(DB::raw('count(medicines.id)'), 1)
            ->select('categories.name')
            ->get();

        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->having(DB::raw('count(medicines.id)'), 1)
            ->select('categories.name')
            ->get();

        return view('report.list_kategori_punya_1_medicines', compact('data'));
    }

    public function showMedicineHasOneForm()
    {
        // 5. Tampilkan obat yang memiliki satu form
        $data = DB::select(DB::raw("select generic_name, count(distinct(form)) from medicines group by category_id, generic_name having count(distinct(form)) = 1"));
        $data = DB::table('medicines')
            ->groupBy('category_id', 'generic_name')
            ->having(DB::raw('count(distinct(form))'), 1)
            ->select('generic_name', DB::raw('count(distinct(form)) as count'))
            ->get();
        $data = Medicine::groupBy('category_id', 'generic_name')
            ->having(DB::raw('count(distinct(form))'), 1)
            ->select('generic_name', DB::raw('count(distinct(form)) as count'))
            ->get();

        return view('report.list_medicines_has_one_form', compact('data'));
    }

    public function showMedicinesHasMostExpensivePrice()
    {
        // 6. Tampilkan kategori dan nama obat yang memiliki harga termahal
        $data = DB::select(DB::raw("select m.generic_name, c.name, m.price from medicines m inner join categories c on m.category_id = c.id where m.price = (select max(price) from medicines)"));

        $data = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->where('medicines.price', function ($query) {
                $query->select(DB::raw('max(price)'))->from('medicines');
            })
            ->select('medicines.generic_name', 'categories.name', 'medicines.price')
            ->get();

        $data = Medicine::join('categories', 'medicines.category_id', '=', 'categories.id')
            ->where('medicines.price', function ($query) {
                $query->select(DB::raw('max(price)'))->from('medicines');
            })
            ->select('medicines.generic_name', 'categories.name', 'medicines.price')
            ->get();

        return view('report.medicine_most_expensive_price', compact('data'));
    }

    public function showInfo()
    {
        $result = Medicine::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
                     Did you know? <br>The most expensive medicines is " . $result->generic_name . "</div>"
        ), 200);
    }

    public function getEditForm(Request $request)
    {
        $id = $request->get('id');
        $data = Medicine::find($id);
        $category = DB::select(DB::raw("select * from categories"));
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('medicine.getEditForm', compact('data','category'))->render()
        ), 200);
    }

    public function getEditForm2(Request $request)
    {
        $id = $request->get('id');
        $data = Medicine::find($id);
        $category = DB::select(DB::raw("select * from categories"));
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('medicine.getEditForm2', compact('data','category'))->render()
        ), 200);
    }

    public function saveData(Request $request)
    {
        try{
            $id = $request->get('id');
            $medicine = Medicine::find($id);
            $medicine->generic_name = $request->get('generic_name');
            $medicine->form = $request->get('form');
            $medicine->restriction_formula = $request->get('restricition_formula');
            $medicine->price = $request->get('price');
            $medicine->description = $request->get('description');
            $medicine->faskes_tk1 = $request->get('faskes1');
            $medicine->faskes_tk2 = $request->get('faskes2');
            $medicine->faskes_tk3 = $request->get('faskes3');
            $medicine->category_id = $request->get('category');
            $medicine->save();
    
            return response()->json(array(
                'status' => 'oke',
                'msg' => 'sukses mengubah data medicine'
            ), 200);
        } 
        catch(\PDOException $e) {
            return response()->json(array(
                'status' => 'error',
                'msg' => 'gagal mengubah data medicine'
            ), 200);
        }
    }

    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $data = Medicine::find($id);
            $data->delete();
            return response()->json(array(
                'status' => 'oke',
                'msg' => 'Sukses menghapus data medicine'
            ), 200);
        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'gagal',
                'msg' => 'Gagal menghapus data medicine'
            ), 200);
        }
    }

    public function front_index()
    {
        $products = Medicine::all();
        return view('frontend.product', compact('products'));
    }

    public function addToCart($id)
    {
        $p = Medicine::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "name" => $p->generic_name,
                "quantity" => 1,
                "price" => $p->price,
                "photo" => $p->image
            ];
        }
        else {
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Medicine added to cart successfully!');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function saveDataField(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $value = $request->get('value');

        $medicine = Medicine::find($id);
        $medicine->$name = $value;
        $medicine->save();
        return response()->json(array(
            'status'=>'ok',
            'msg'=>'medicine data updated'
        ), 200);

    }
}
