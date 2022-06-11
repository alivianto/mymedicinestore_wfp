<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk Query dengan RAW
        $listDataM = DB::select(DB::raw("select * from medicines"));
        $listDataC = DB::select(DB::raw("select * from categories"));
        
        return view('category.index', compact('listDataM','listDataC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->save();
        return redirect()->route('kategori_obat.index')->with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showlist($id_category)
    {
        $data = Category::find($id_category);
        $namecategory = isset($data->name) ? $data->name : '';

        $result = isset($data->medicines) ? $data->medicines : [];
        //dd($result);
        if($result){
            $getTotalData = $result->count();
        } else {
            $getTotalData = 0;
        }
        return view('report.list_medicines_by_category', compact('id_category','namecategory','result','getTotalData'));
    }

    public function showListCateogory()
    {
        // 1.tampilkan seluruh data katergori obat
        $data = DB::select(DB::raw("select * from categories"));

        $data = DB::table('categories')->get();
        
        $data = Category::get();

        return view('report.list_category', compact('data'));
    }
    
}
