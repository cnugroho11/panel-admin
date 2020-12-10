@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Tugas</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelas_t">Kelas</label>
                                <input id="kelas_t" type="text" value="{{ $tugas['kelas_t'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="mapel_t">Mata Pelajaran</label>
                                <input id="mapel_t" type="text" value="{{ $tugas['mapel_t'] }}" class="form-control"
                                    disabled />
                            </div>
                            <div class="form-group">
                                <label for="id_guru_t">ID Guru</label>
                                <input id="id_guru_t" type="text" value="{{ $tugas['id_guru_t'] }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_t">Tanggal</label>
                                <input id="tanggal_t" type="text" value="{{ $tugas['tanggal_t'] }}" class="form-control"
                                    disabled />
                            </div>
                            <div class="form-group">
                                <label for="jenis_t">Jenis</label>
                                <input id="jenis_t" type="jenis_t" value="{{ $tugas['jenis_t'] }}" class="form-control"
                                    disabled />
                            </div>
                            <div class="form-group">
                                <label for="file_t">File</label>
                                <input id="file_t" type="file_t" value="{{ $tugas['file_t'] }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
