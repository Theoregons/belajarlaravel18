@extends('template')
@section('main')
    <h1>Tambah Data</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis"
                value="{{ old('nis') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                value="{{ old('alamat') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sekolah</label>

            <select class="custom-select" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
