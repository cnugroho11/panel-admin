@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
            {{ Form::model($berita, ['route' => ['berita.update', $berita['id']], 'files' => true, 'method' => 'PUT']) }}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ubah Berita</h3>
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
                                {{ Form::label('judul', 'Judul Berita') }}
                                {{ Form::text('judul', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Judul berita']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('penulis', 'Penulis Berita') }}
                                {{ Form::text('penulis', '', ['class' => 'form-control', 'placeholder' => 'Masukkan penulis berita']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('keterangan', 'Keterangan Berita') }}
                                {{ Form::text('keterangan', '', ['class' => 'form-control', 'placeholder' => 'Masukkan keterangan berita']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('kategori', 'Kategori Berita') }}
                                {{ Form::text('kategori', '', ['class' => 'form-control', 'placeholder' => 'Masukkan penulis berita']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('tanggal', 'Tanggal Berita') }}
                                {{ Form::text('tanggal', '', ['class' => 'form-control', 'placeholder' => 'Masukkan tanggal berita']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{ Form::label('isi', 'Isi Berita') }}
                            {{ Form::textarea('isi', '', ['class' => 'form-control', 'placeholder' => 'Tulis berita anda disini', 'rows' => 5]) }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ URL::to('admin/berita') }}" class="btn btn-outline-info">Back</a>
                    {{ Form::submit('Proses', ['class' => 'btn btn-primary pull-right']) }}
                </div>
            </div>
            <!-- </form> -->
            {{ Form::close() }}
        </div>
    </div>
@endsection
