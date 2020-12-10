@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Materi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="mapel">Mata Pelajaran</label>
                                <input id="mapel" type="text" value="{{ $materi['mapel'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="kelas">Tanggal berita</label>
                                <input id="kelas" type="text" value="{{ $materi['kelas'] }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input id="jenis" type="text" value="{{ $materi['jenis'] }}" class="form-control"
                                    disabled />
                            </div>
                            <div class="form-group">
                                <label for="file">kategori berita</label>
                                <input id="file" type="text" value="{{ $materi['file'] }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Isi Berita</label>
                                <input id="description" type="text" value="{{ $materi['catatan'] }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
