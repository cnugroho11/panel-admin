@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Materi</h3>
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
                                        <th>Nama Komentar</th>
                                        <th>Tanggal Komentar</th>
                                        <th>Komentar</th>
                                        <th>ID Berita</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($komentar as $komentar)
                                        <tr>
                                            <td class="text-center">{{ $komentar['id'] }}</td>
                                            <td>{{ $komentar['nama_kom'] }}</td>
                                            <td>{{ $komentar['tanggal_kom'] }}</td>
                                            <td>{{ $komentar['komentar'] }}</td>
                                            <td>{{ $komentar['id_berita'] }}</td>
                                            <td class="text-center">
                                                <form method="POST"
                                                    action="{{ URL::to('/admin/komentar/' . $komentar['id']) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <div class="btn-group">
                                                        <a class="btn btn-info"
                                                            href="{{ URL::to('/admin/komentar/' . $komentar['id']) }}"><i
                                                                class="fa fa-eye"></i></a>
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></button>
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
