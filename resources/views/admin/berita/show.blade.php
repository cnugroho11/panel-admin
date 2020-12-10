@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Barang</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                             
                            <div class="form-group">
                                <label for="name">Judul Berita</label>
                                <input id="name" type="text" value="{{ $berita['judul'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal berita</label>
                                <input id="tanggal" type="text" value="{{ $berita['tanggal'] }}" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penulis">Penulis berita</label>
                                <input id="penulis" type="text" value="{{ $berita['penulis'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="kategori">kategori berita</label>
                                <input id="kategori" type="text" value="{{ $berita['kategori'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Isi Berita</label>
                                <input id="description" type="text" value="{{ $berita['isi'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection