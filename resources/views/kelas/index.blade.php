@extends('layout.app')
@section('content')
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Kelas</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $d )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->fakultas }}</td>
                <td>{{ $d->prodi }}</td>
                <td>{{ $d->kelas }}</td>
                <td>{{ $d->isi }}</td>
                <td>
                    Hapus | edit
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
