@extends('layouts.app')

@section('judul')
    Negara {{ $negara->nama }}
@endsection

@section('isi')
    <div class="mb-4">
        <ul style="list-style: none">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama Inggris</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Kode ISO3</th>
                        <th scope="col">Lat</th>
                        <th scope="col">Lon</th>
                        <th scope="col">Kode Telepon</th>
                        <th scope="col">Mata Uang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $negara->nama_inggris }}
                        </td>
                        <td>
                            {{ $negara->kode }}
                        </td>
                        <td>
                            {{ $negara->kode_iso3 }}
                        </td>
                        <td>
                            {{ $negara->lat }}
                        </td>
                        <td>
                            {{ $negara->lon }}
                        </td>
                        <td>
                            {{ $negara->kode_telepon }}
                        </td>
                        <td>
                            {{ $negara->mata_uang }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </div>

    <h3 class="text-center">Daftar kota di {{ $negara->nama }}</h3>
    <ul style="list-style: none">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Nama Kota</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kotas as $kota)
                    <tr>
                        <td>{{ $kota->nama }}</td>
                    </tr>
                @empty
                    <p>Tidak ada kota yang terdaftar</p>
                @endforelse
            </tbody>
        </table>
    </ul>

@endsection
