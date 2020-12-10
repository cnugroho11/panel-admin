<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas=\App\Tugas::all();
        $data=['tugas'=>$tugas];
        return view('admin/tugas/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tugas/create');
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
            'kelas_t'=>'required',
            'mapel_t'=>'required',
            'id_guru_t'=>'required',
            'tanggal_t'=>'required',
            'jenis_t'=>'required',
            'file_t'=>'required',
        ];

        $pesan=[
            'kelas_t.required'=>'kelas tidak boleh kosong',
            'mapel_t.required'=>'mapel tidak boleh kosong',
            'id_guru_t.required'=>'ID guru tidak boleh kosong',
            'tanggal_t.required'=>'tanggal tidak boleh kosong',
            'jenis_t.required'=>'Jenis tidak boleh kosong',
            'file_t.required'=>'file tidak boleh kosong',
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/tugas/create')->withErrors($validator);
        }
        else{
            $tugas=new \App\Tugas;

            $tugas->kelas_t=Input::get('kelas_t');
            $tugas->mapel_t=Input::get('mapel_t');
            $tugas->id_guru_t=Input::get('id_guru_t');
            $tugas->tanggal_t=Input::get('tanggal_t');
            $tugas->jenis_t=Input::get('jenis_t');
            $tugas->file_t=Input::get('file_t');
            $tugas->save();

            Session::flash('message', 'Tugas tersimpan');

            return Redirect::to('admin/tugas');
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
        $tugas=\App\Tugas::find($id);
        $d=['tugas'=>$tugas];
        return view('admin/tugas/show')->with($d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas=\App\Tugas::find($id);
        $d=['tugas'=>$tugas];
        return view('admin/tugas/edit')->with($d);
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
            'kelas_t'=>'required',
            'mapel_t'=>'required',
            'id_guru_t'=>'required',
            'tanggal_t'=>'required',
            'jenis_t'=>'required',
            'file_t'=>'required',
        ];

        $pesan=[
            'kelas_t.required'=>'kelas tidak boleh kosong',
            'mapel_t.required'=>'mapel tidak boleh kosong',
            'id_guru_t.required'=>'ID guru tidak boleh kosong',
            'tanggal_t.required'=>'tanggal tidak boleh kosong',
            'jenis_t.required'=>'Jenis tidak boleh kosong',
            'file_t.required'=>'file tidak boleh kosong',
        ];

        $validator=Validator::make(Input::all(),$rules,$pesan);

        if($validator->fails()){
            return Redirect::to('admin/tugas/'.$id.'/edit')->withErrors($validator);
        }
        else{
            $tugas=\App\Tugas::find($id);

            $tugas->kelas_t=Input::get('kelas_t');
            $tugas->mapel_t=Input::get('mapel_t');
            $tugas->id_guru_t=Input::get('id_guru_t');
            $tugas->tanggal_t=Input::get('tanggal_t');
            $tugas->jenis_t=Input::get('jenis_t');
            $tugas->file_t=Input::get('file_t');
            $tugas->save();

            Session::flash('message', 'Tugas tersimpan');

            return Redirect::to('admin/tugas');
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
        $tugas=\App\Tugas::find($id);
        $tugas->delete();

        Session::flash('message','Tugas dihapus');
        return Redirect::to('admin/tugas');
    
    }
}
