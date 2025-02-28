@extends('template')
@section('main')
    <h1>Data Siswa</h1>
    {{-- <a href="{{ url('siswa/create') }}" class="my-3 btn btn-primary">Tambah Data URL</a> --}}
    <a href="{{ route('siswa.create') }}" class="my-3 btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->sekolah->nama_sekolah }}</td>
                    <td class="d-flex">
                        <a href="{{ route('siswa.edit',$item->id) }}" class="my-3  btn btn-warning">Edit</a>
                        <form action="{{ route('siswa.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="my-3 btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
