@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Edit Mahasiswa</h2>
            <form method="POST" action="{{ url('mahasiswa/'.$model->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="Nim">Nim:</label>
                    <input type="text" class="form-control" id="Nim" name="Nim" value="{{ $model->Nim }}">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $model->Nama }}">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi:</label>
                    <input type="text" class="form-control" id="Prodi" name="Prodi" value="{{ $model->Prodi }}">
                </div>
                <div class="form-group">
                    <label for="Gender">Gender:</label>
                    <input type="text" class="form-control" id="Gender" name="Gender" value="{{ $model->Gender }}">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{ $model->Gender }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
