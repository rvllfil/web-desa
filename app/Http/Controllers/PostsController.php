<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


use App\Posts;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::paginate(10);
        return view('admin.posts', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts_create');
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
            'content' => 'required',
            'thumbnail' => 'required'
        ]);

        $thumbnail = $request->thumbnail;
        $gambar = time().$thumbnail->getClientOriginalName();

        $post = Posts::create([
            'judul' => $request->judul,
            'content' => $request->content,
            'thumbnail' => 'uploads/posts/'.$gambar,
            'slug' => Str::of($request->judul)->slug('-')
        ]);

        $thumbnail->move('uploads/posts/', $gambar);

        return redirect()->route('posts.index')->with('status', 'Postingan anda berhasil dibuat!');
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
        $post = Posts::findorfail($id);
        return view('admin.posts_edit', compact('post'));
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
            'content' => 'required',
        ]);
        
        $post = Posts::findorfail($id);

        if($request->has('thumbnail')) {

            $thumbnail = $request->thumbnail;
            $gambar = time().$thumbnail->getClientOriginalName();

            $post_data = [
                'judul' => $request->judul,
                'content' => $request->content,
                'thumbnail' => 'uploads/posts/'.$gambar,
                'slug' => Str::of($request->judul)->slug('-')
            ];
            File::delete(public_path($post->thumbnail));
            $thumbnail->move('uploads/posts/', $gambar);
        } 
        else {
            $post_data = [
                'judul' => $request->judul,
                'content' => $request->content,
                'slug' => Str::of($request->judul)->slug('-')
            ];
        }  

        $post->update($post_data);
        
        return redirect()->route('posts.index')->with('status', 'Postingan anda berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        File::delete(public_path($post->thumbnail));
        $post->delete();

        return redirect()->route('posts.index')->with('status', 'Postingan anda berhasil dihapus!');
    }
}
