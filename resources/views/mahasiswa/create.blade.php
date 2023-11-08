@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <h2>Tambah Mahasiswa</h2>
    <form method="POST" action="{{ url('mahasiswa') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Nim">Nim:</label>
            <input type="text" name="Nim" id="Nim" class="form-control" placeholder="Masukkan Nim" required>
        </div>

        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="">Prodi:</label>
            <input type="text" name="Prodi" id="Prodi" class="form-control" placeholder="Prodi" required>
        </div>

        <div class="form-group">
            <label for="Gender">Gender:</label>
            <input type="text" name="Gender" id="Gender" class="form-control" placeholder="Masukkan Gender" required>
        </div>

        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
