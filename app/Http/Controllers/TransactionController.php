<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Buyer;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $data = Transaction::all();
        //dd($data);
        return view('transaction.index', compact('data'));
    }

    public function show()
    {
        
    }

    public function detail($id)
    {
        $data = Transaction::find($id);
        
    }

    public function showAjax(Request $request)
    {
        $id = ($request->get('id'));
        $data = Transaction::find($id);
        $dataProduk = $data->medicines;
        return response()->json(array(
            'msg'=> view('transaction.detail', compact('data','dataProduk'))->render()
        ), 200);
    }

    public function form_submit_front()
    {
        $this->authorize('checknumber');
        return view('frontend.checkout');
    }

    public function submit_front()
    {
        $this->authorize('checknumber');
    }
}
