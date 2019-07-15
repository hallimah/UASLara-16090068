<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Storage;
use Validator;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.admin.lihat', ['blogs' => $blogs]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.lihat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'isi_berita'=> 'required',
            'judul'     => 'required',
            'image'     => 'required|image|max:2048',
            'kategori'  => 'required'
        );

        //validasi
        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        //image post
        $thumbnail = $request->file('image');
        $new_name = rand() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('public/images/post'), $new_name);
        
        //konten
        $konten=$request->input('isi_berita');

        $form_data = array(
            'judul' =>  $request->judul,
            'isi_berita' =>  $konten,
            'kategori' =>  $request->kategori,
            'foto' =>  $new_name
        );

        Blog::create($form_data);

        return redirect()->route('list')->with('success','Posted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('pages.user.readmore', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.edit', ['blogs' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->foto;
        $image = $request->file('foto');
        if($image != ''){
            $rules = array(
                'judul' =>  'required',
                'isi_berita' =>  'required',
                'kategori' =>  'required',
                'foto' =>  'image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails()){
                return response()->json(['errors' => $error->errors()->all()]);   
            }
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/images/post'), $image_name);
        } else{
            $rules = array(
                'judul'    =>  'required',
                'isi_berita'     =>  'required',
                'kategori'     =>  'required'
            );
            $error = Validator::make($request->all(), $rules);

            if($error->fails()){
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }
        $form_data = array(
            'judul' =>   $request->judul,
            'isi_berita' =>   $request->isi_berita,
            'kategori' =>   $request->kategori,
            'foto' =>   $image_name
        );
        Blog::whereId($request->id)->update($form_data);

         return redirect()->route('list')->with(['success' => 'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();
        return redirect()->route('list')->with('success','Deleted successfully!');
    }
}
