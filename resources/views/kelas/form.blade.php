@extends('layout.app')
@section('content')

    <div class="card mt-3">
        <div class="card-header">
            Tambah Data Kelas
            <a href="{{route('kelas.index')}}" class="btn btn-warning float-right">Kembali</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('kelas.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" value="{{ old('fakultas') }}">
                </div>
                <div class="form-group">
                    <label for="">Prodi</label>
                    <input type="text" class="form-control" name="prodi" value="{{ old('prodi') }}">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
                </div>
                <div class="form-group">
                    <label for="">Isi</label>
                    <input type="number" class="form-control" name="isi"  value="{{ old('isi') }}">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
                <a href="{{ route('kelas.index') }}" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
@endsection
