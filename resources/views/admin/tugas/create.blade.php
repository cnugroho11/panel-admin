@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            {{ Form::open(['route' => 'tugas.store', 'files' => true]) }}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buat Tugas Baru</h3>
                </div>
                <div class="card-body">
                    @if (!empty($errors->all()))
                        <div class="alert alert-danger">
                            {{ Html::ul($errors->all()) }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('kelas_t', 'Kelas') }}
                                {{ Form::text('kelas_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan kelas']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('mapel_t', 'Mata Pelajaran') }}
                                {{ Form::text('mapel_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan mapel']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('id_guru_t', 'ID Guru') }}
                                {{ Form::text('id_guru_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan ID GUru']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('tanggal_t', 'Tanggal') }}
                                {{ Form::text('tanggal_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Tanggal']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('jenis_t', 'Jenis') }}
                                {{ Form::text('jenis_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Jenis']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('file_t', 'File') }}
                                {{ Form::text('file_t', '', ['class' => 'form-control', 'placeholder' => 'Masukkan File']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ URL::to('admin') }}" class="btn btn-outline-info">Kembali</a>
                    {{ Form::submit('Proses', ['class' => 'btn btn-primary pull-right']) }}
                </div>
            </div>
            <!-- </form> -->
            {{ Form::close() }}
        </div>
    </div>
@endsection
