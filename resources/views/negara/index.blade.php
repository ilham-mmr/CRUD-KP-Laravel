@extends('layouts.app')

@section('judul')
    Daftar Negara
@endsection

@section('isi')
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
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </ul>

@endsection
