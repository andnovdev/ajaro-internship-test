@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('KELOLA DATA BARANG') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('barangs.store')}}">
                        @csrf

                        <div class="card-title">
                            Tambah Data Barang :
                        </div>

                        <div class="form-group row">
                            <label for="kode" class="col-md-4 col-form-label text-md-right">{{ __('Kode') }}</label>

                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" required autocomplete="kode" autofocus>

                                @error('kode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama">

                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" rows="8" cols="80"></textarea>

                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Stok') }}</label>

                            <div class="col-md-6">
                                <input id="stok" type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" required autocomplete="stok">

                                @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga (RP)') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga">

                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berat" class="col-md-4 col-form-label text-md-right">{{ __('Berat (Gram)') }}</label>

                            <div class="col-md-6">
                                <input id="berat" type="number" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{ old('berat') }}" required autocomplete="berat">

                                @error('berat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input class="btn btn-success" type="submit" name="tambah" value="{{__('Tambah')}}">
                                <a class="btn btn-danger" href="{{url('/barangs')}}">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
