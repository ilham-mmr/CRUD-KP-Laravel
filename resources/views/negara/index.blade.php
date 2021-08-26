@extends('layouts.app')

@section('judul')
    Daftar Negara
@endsection

@section('isi')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <ul style="list-style: none">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Nama Negara</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($negaras as $negara)
                    <tr>
                        <td>{{ $negara->nama }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('negara.show', $negara->id) }}"
                                role="button">Detail</a>
                            <a class="btn btn-dark" href="{{ route('negara.edit', $negara->id) }}" role="button">Edit</a>

                            <form action="{{ route('negara.destroy', $negara->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </ul>

@endsection
