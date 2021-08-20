@extends('layouts.app')

@section('judul')
    Daftar Kota
@endsection

@section('isi')
    <ul style="list-style: none">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Nama Kota</th>
                    <th scope="col">Nama Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kotas as $kota)
                    <tr>
                        <td>{{ $kota->nama }}</td>
                        <td>
                            <a href="{{ route('negara.show', $kota->negara->id) }}">{{ $kota->negara->nama }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>

@endsection
