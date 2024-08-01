@extends('template')
@section('main')
    <h1>Upload File</h1>
    <form action="{{ route('upload.store') }}" class="d-flex my-2" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="custom-file w-75">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <div>
            <button type="submit" class="btn btn-success mx-3">Submit</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'.$item->image) }}" width="300" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
