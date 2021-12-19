<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        if($request->has('search')){
            $search = $request->search;
            $datas = Produk::where('produk','like','%'.$search.'%')->paginate(5);
    
        }else{
            $datas = Produk::paginate(5);
        }
        
        return view('dashboard.produk',compact(
            'datas',
        ));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Produk;

        return view('dashboard.tambah_produk',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Produk;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $imageName = time().'-'.$request->image->getClientOriginalName();  
        $request->image->move(public_path('assets/image'), $imageName);

        $model->id = rand(1,500);
        $model->produk = $request->produk;    
        $model->foto = 'assets/image/'.$imageName;
        $model->deskripsi = $request->deskripsi;
        $model->jenis_produk = $request->jenis_produk;
        $model->harga = $request->harga;
        $model->umkm = $request->umkm;
        $model->save();

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::find($id);

        return view('dashboard.update',compact(
            'data'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Produk::find($id);

        $model->produk = $request->produk;    
        $model->deskripsi = $request->deskripsi;

        if($request->image){    
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $imageName = time().'-'.rand(1,1000).$request->image->getClientOriginalName();    
            $request->image->move(public_path('assets/image'), $imageName);
            $model->foto = 'assets/image/'.$imageName;
        }else{
            $model->foto = $model->foto;
        }
        
        $model->jenis_produk = $request->jenis_produk;
        $model->harga = $request->harga;
        $model->umkm = $request->umkm;
        $model->terjual = $request->terjual;
        $model->stok = $request->stok;
        $model->save();

        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Produk::find($id);
        $model->delete();

        return redirect('produk');
    }

    public function exportData()
    {
        return Excel::download(new ProdukExport, 'Laporan Produk.xlsx');
    }
}
