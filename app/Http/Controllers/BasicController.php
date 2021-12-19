<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class BasicController extends Controller
{
    public function index()
    {
        $datas = Produk::paginate(12);
        
        return view('produk',compact(
            'datas',
        ));
    }

    public function cari(Request $request)
    {
    
        $search = $request->search;
        $datas = Produk::where('produk','like','%'.$search.'%')->paginate(12);
          
        return view('produk',compact(
            'datas',
        ));
   
    }
}
