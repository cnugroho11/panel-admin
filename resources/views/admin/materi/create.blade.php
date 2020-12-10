@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            {{ Form::open(['route' => 'materi.store', 'files' => true]) }}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buat Materi Baru</h3>
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
                                {{ Form::label('mapel', 'Mata Pelajaran') }}
                                {{ Form::text('mapel', '', ['class' => 'form-control', 'placeholder' => 'Masukkan mata pelajaran']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('kelas', 'Kelas') }}
                                {{ Form::text('kelas', '', ['class' => 'form-control', 'placeholder' => 'Masukkan kelas']) }}
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('jenis', 'Jenis') }}
                                {{ Form::text('jenis', '', ['class' => 'form-control', 'placeholder' => 'Masukkan jenis']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('file', 'File') }}
                                {{ Form::text('file', '', ['class' => 'form-control', 'placeholder' => 'Masukkan file']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{ Form::label('catatan', 'Catatan') }}
                            {{ Form::textarea('catatan', '', ['class' => 'form-control', 'placeholder' => 'Tulis catatan anda disini', 'rows' => 5]) }}
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
