@extends('layouts.app')

@section('judul')
    Daftar Medali
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Results</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Negara</th>
                                    <th scope="col">Gold</th>
                                    <th scope="col">Silver</th>
                                    <th scope="col">Bronze</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($negaras as $negara)
                                    <tr>
                                        <th>{{ $negara->nama }}</th>
                                        <td>{{ $negara->gold }}</td>
                                        <td>{{ $negara->silver }}</td>
                                        <td>{{ $negara->bronze }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
