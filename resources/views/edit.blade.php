@extends('template')
@section('main')
    <h1>Edit Data</h1>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis"
                value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sekolah</label>

            <select class="custom-select" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
