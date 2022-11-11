@extends('layout.app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>no</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($data as $d )
            <td>{{ ++$no }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->jurusan }}</td>
            <td>{{ $d->prodi }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit',$d->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('mahasiswa.delete', $d->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        @endforeach
        </tbody>
    </table>
@endsection
