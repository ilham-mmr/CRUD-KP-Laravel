@extends('layouts.app')

@section('judul')
    Tambah Negara
@endsection

@section('isi')
    <form method="POST" action="{{ route('negara.store') }}">
        @csrf
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text">Kode</span>
                <input type="text" class="form-control" name="kode" value="{{ old('kode') }}" placeholder="e.g. ID">
            </div>
            @error('kode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Kode ISO3</span>
                <input type="text" class="form-control" name="kode_iso3" value="{{ old('kode_iso3') }}"
                    placeholder="e.g. INA">
            </div>
            @error('kode_iso3')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text">Nama Negara</span>
                <input type="text" placeholder="Nama e.g. Swedia" name="nama" value="{{ old('nama') }}"
                    class="form-control">
                <input type="text" placeholder="Nama Inggris: e.g. Sweden" name="nama_inggris"
                    value="{{ old('nama_inggris') }}" class="form-control">
            </div>
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            @error('nama_inggris')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text">Lat & lon</span>
                <input type="number" step="0.000001" name="lat" value="{{ old('lat') }}" placeholder="e.g. 20.32"
                    class="form-control">
                <input type="number" step="0.000001" name="lon" placeholder="e.g. 19.232" class="form-control">
            </div>
            @error('lat')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            @error('lon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Kode Telp</span>
                <input type="number" class="form-control" name="kode_telepon" placeholder="e.g. 62">
            </div>
            @error('kode_telepon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Mata Uang</span>
                <input type="text" class="form-control" name="mata_uang" placeholder="e.g. EUR">
            </div>
            @error('mata_uang')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-success m-3">Kirim</button>
        </div>
    </form>

@endsection
