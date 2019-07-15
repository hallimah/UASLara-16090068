<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogs = Post::orderBy('id')->get();
        return view('pages.admin.post', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'min:10',
            'isi_berita' => 'min:20',
            'kategori' => 'required',
        ]);

        $foto = $request->file('foto')->store('blog');

        Post::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'foto' => $foto,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('lihat')->with('success','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
        return view('pages.admin.lihat', compact('blog'));
    }
	
	
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        return view('pages.admin.edit', compact('blog'),['message'=>'']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        if ($request->foto) {
        $foto_path = $blog->foto;
        if (Storage::exists($foto_path)) {
          Storage::delete($foto_path);
        }
        $foto = $request->file('foto')->store('blog');
        $blog->update([
          'judul' => $request->judul,
          'isi_berita' => $request->isi_berita,
          'foto' => $foto,
          'kategori' => $request->kategori
        ]);

      }else {
        $blog->update([
          'judul' => $request->judul,
          'isi_berita' => $request->isi_berita,
          'kategori' => $request->kategori
        ]);

      }

        return redirect()->route('blog')->with('success','Blog berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



	
}
