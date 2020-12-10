<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;


class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi=\App\Materi::all();
        $data=['materi'=>$materi];
        return view('admin/materi/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/materi/create');
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
            'mapel'=>'required',
            'kelas'=>'required',
            'jenis'=>'required',
            'file'=>'required',
            'catatan'=>'required',
        ];

        $pesan=[
            'mapel.required'=>'mapel tidak boleh kosong',
            'kelas.required'=>'kelas tidak boleh kosong',
            'jenis.required'=>'jenis tidak boleh kosong',
            'file.required'=>'file tidak boleh kosong',
            'catatan.required'=>'catatan tidak boleh kosong',
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/materi/create')->withErrors($validator);
        }
        else{
            $materi=new \App\Materi;

            $materi->mapel=Input::get('mapel');
            $materi->kelas=Input::get('kelas');
            $materi->jenis=Input::get('jenis');
            $materi->file=Input::get('file');
            $materi->catatan=Input::get('catatan');
            $materi->save();

            Session::flash('message', 'Materi tersimpan');

            return Redirect::to('admin/materi');
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
        $materi=\App\Materi::find($id);
        $d=['materi'=>$materi];
        return view('admin/materi/show')->with($d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi=\App\Materi::find($id);
        $d=['materi'=>$materi];
        return view('admin/materi/edit')->with($d);
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
            'mapel'=>'required',
            'kelas'=>'required',
            'catatan'=>'required',
        ];

        $pesan=[
            'mapel.required'=>'mapel tidak boleh kosong',
            'kelas.required'=>'kelas tidak boleh kosong',
            'catatan.required'=>'catatan tidak boleh kosong',
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/materi/'.$id.'/edit')->withErrors($validator);
        }
        else{
            $materi=\App\Materi::find($id);

            $materi->mapel=Input::get('mapel');
            $materi->kelas=Input::get('kelas');
            $materi->jenis=Input::get('jenis');
            $materi->file=Input::get('file');
            $materi->catatan=Input::get('catatan');
            $materi->save();

            Session::flash('message', 'Materi tersimpan');

            return Redirect::to('admin/materi');
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
        $materi=\App\Materi::find($id);
        $materi->delete();

        Session::flash('message','Materi dihapus');
        return Redirect::to('admin/materi');
    }
}
