@extends('layouts.app')

@section('judul')
    Daftar Olahraga
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('sports.store') }}">
                    @foreach ($sports as $sport)
                        <div class="card mb-4">
                            <div class="card-header">{{ $sport->name }}</div>

                            <div class="card-body">
                                @csrf

                                <div class="form-group row">
                                    <label for="first" class="col-md-4 col-form-label text-md-right">1st place:</label>

                                    <div class="col-md-6">
                                        <select name="sports[{{ $sport->id }}][0]" id="first"
                                            class="form-control @error('sports.' . $sport->id . '.0') is-invalid @enderror">
                                            <option value="">-- choose country --</option>
                                            @foreach ($negaras as $negara)
                                                <option value="{{ $negara->id }}" @if (old('sports.' . $sport->id . '.0') == $negara->id) selected @endif>
                                                    {{ $negara->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('sports.' . $sport->id . '.0')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="first" class="col-md-4 col-form-label text-md-right">2nd place:</label>

                                    <div class="col-md-6">
                                        <select name="sports[{{ $sport->id }}][1]" id="first"
                                            class="form-control @error('sports.' . $sport->id . '.1') is-invalid @enderror">
                                            <option>-- choose country --</option>
                                            @foreach ($negaras as $negara)
                                                <option value="{{ $negara->id }}" @if (old('sports.' . $sport->id . '.1') == $negara->id) selected @endif>
                                                    {{ $negara->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('sports.' . $sport->id . '.1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="first" class="col-md-4 col-form-label text-md-right">3rd place:</label>

                                    <div class="col-md-6">
                                        <select name="sports[{{ $sport->id }}][2]" id="first"
                                            class="form-control @error('sports.' . $sport->id . '.2') is-invalid @enderror">
                                            <option>-- choose country --</option>
                                            @foreach ($negaras as $negara)
                                                <option value="{{ $negara->id }}" @if (old('sports.' . $sport->id . '.2') == $negara->id) selected @endif>
                                                    {{ $negara->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('sports.' . $sport->id . '.2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
