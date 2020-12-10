@extends('admin/admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Berita</h3>
                <div class="card-tools">
                 <a href="{{ URL::to('/admin/berita/create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $berita)
                            <tr>
                                <td class="text-center">{{ $berita['id'] }}</td>
                                <td>{{ $berita['judul'] }}</td>
                                <td>{{ $berita['isi'] }}</td>
                                <td>{{ $berita['tanggal'] }}</td>
                                <td>{{ $berita['penulis'] }}</td>
                                <td>{{ $berita['kategori'] }}</td>
                                <td>{{ $berita['keterangan'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/admin/berita/'.$berita['id']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <a class="btn btn-info" href="{{ URL::to('/admin/berita/'.$berita['id']) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-success" href="{{ URL::to('/admin/berita/'.$berita['id'].'/edit') }}"><i class="fa fa-pen"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection