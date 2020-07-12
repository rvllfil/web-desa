<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TransparansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transparansi = DB::table('transparansi')->select('id','judul', 'gambar')->get();
        return view('admin.transparansi', compact('transparansi'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transparansi_create');
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
            'judul' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        
        DB::table('transparansi')->insert([
            'judul' => $request->judul,
            'gambar' => 'uploads/transparansi/'.$new_gambar
        ]);

        $gambar->move('uploads/transparansi/', $new_gambar);

        return redirect()->route('transparansi.index')->with('status', 'Postingan anda berhasil dibuat!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $transparansi = DB::table('transparansi')->select('id','judul', 'gambar')->orderBy('id', 'desc')->get();
        return view('transparansi', compact('transparansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transparansi = DB::table('transparansi')->where('id', $id)->first();
        return view('admin.transparansi_edit', compact('transparansi'));
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
            'judul' => 'required',
        ]);

        $transparansi = DB::table('transparansi')->where('id', $id)->first();

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            
            $post_data = [
                'judul' => $request->judul,
                'gambar' => 'uploads/transparansi/'.$new_gambar
            ];
            File::delete(public_path($transparansi->gambar));
            $gambar->move('uploads/transparansi/', $new_gambar);
        }
        else {
            $post_data = [
                'judul' => $request->judul
            ];
        }
        
        DB::table('transparansi')->where('id', $id)->update($post_data);

        return redirect()->route('transparansi.index')->with('status', 'Data anda berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transparansi = DB::table('transparansi')->where('id', $id)->first();

        File::delete(public_path($transparansi->gambar));
        DB::table('transparansi')->where('id', $id)->delete();
        return redirect()->route('transparansi.index')->with('status', 'Data anda berhasil dihapus!');
    }
}
