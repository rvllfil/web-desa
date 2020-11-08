<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use App\Barang;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('admin.products', compact('barangs'));
    }


    public function display()
    {
        $products = Barang::paginate(20);
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kontak_penjual' => 'required',
            'gambar' => 'required',
        ]);
        $gambar = $request->gambar;
        $gambar_baru = time().$gambar->getClientOriginalName();

        $produk = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'kontak_penjual' => $request->kontak_penjual,
            'gambar' => 'uploads/produk/'.$gambar_baru
        ]);

        $gambar->move('uploads/produk/', $gambar_baru);
        return redirect()->route('produk.index')->with('status', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Barang::where('id', $id)->first();
        return view('product', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Barang::findorfail($id);
        return view('admin.products_edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga' => 'required',
            'kontak_penjual' => 'required',
            'deskripsi' => 'required'
        ]);

        $produk = Barang::findorfail($id);

        if($request->has('gambar')) {

            $gambar = $request->gambar;
            $gambar_baru = time().$gambar->getClientOriginalName();

            $produk_data = [
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'kontak_penjual' => $kontak_penjual,
                'gambar' => 'uploads/produk/'.$gambar_baru
            ];
            File::delete(public_path($produk->gambar));
            $gambar->move('uploads/produk/', $gambar_baru);
        } 
        else {
            $produk_data = [
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'kontak_penjual' => $kontak_penjual,
            ];
        }  

        $produk->update($produk_data);
        
        return redirect()->route('produk.index')->with('status', 'Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Barang::findorfail($id);
        File::delete(public_path($produk->gambar));
        $produk->delete();

        return redirect()->route('produk.index')->with('status', 'Produk berhasil dihapus!');
    }
}
