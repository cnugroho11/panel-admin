<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=\App\Berita::all();
        $data=['berita'=>$berita];
        return view('admin/berita/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/berita/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'judul'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            'penulis'=>'required',
            'kategori'=>'required',
            'keterangan'=>'required',
        ];

        $pesan=[
            'judul.required'=>'judul tidak boleh kosong',
            'isi.required'=>'isi tidak boleh kosong',
            'tanggal.required'=>'tanggal tidak boleh kosong',
            'penulis.required'=>'penulis tidak boleh kosong',
            'kategori.required'=>'kategori tidak boleh kosong',
            'keterangan.required'=>'keterangan tidak boleh kosong'
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/berita/create')->withErrors($validator);
        }
        else{
            $berita=new \App\Berita;

            $berita->judul=Input::get('judul');
            $berita->isi=Input::get('isi');
            $berita->tanggal=Input::get('tanggal');
            $berita->penulis=Input::get('penulis');
            $berita->kategori=Input::get('kategori');
            $berita->keterangan=Input::get('keterangan');
            $berita->save();

            Session::flash('message', 'Berita tersimpan');

            return Redirect::to('admin/berita');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=\App\Berita::find($id);
        $d=['berita'=>$berita];
        return view('admin/berita/show')->with($d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita=\App\Berita::find($id);
        $d=['berita'=>$berita];
        return view('admin/berita/edit')->with($d);
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
        $rules=[
            'judul'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
        ];

        $pesan=[
            'judul.required'=>'judul tidak boleh kosong',
            'isi.required'=>'isi tidak boleh kosong',
            'tanggal.required'=>'tanggal tidak boleh kosong',
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/berita/'.$id.'/edit')->withErrors($validator);
        }
        else{
            $berita=\App\Berita::find($id);

            $berita->judul=Input::get('judul');
            $berita->isi=Input::get('isi');
            $berita->tanggal=Input::get('tanggal');
            $berita->penulis=Input::get('penulis');
            $berita->kategori=Input::get('kategori');
            $berita->keterangan=Input::get('keterangan');
            $berita->save();

            Session::flash('message', 'Berita tersimpan');

            return Redirect::to('admin/berita');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=\App\Berita::find($id);
        $berita->delete();

        Session::flash('message','Berita dihapus');
        return Redirect::to('admin/berita');
    }
}
