@extends('template')
@section('judul_halaman','')
@section('konten')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('laptop.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold"> kode</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode"value="{{ old('kode') }}" placeholder="Masukkan kode">

                                <!-- error message untuk title -->
                                @error('kode')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> seri</label>
                                <input type="text" class="form-control @error('seri') is-invalid @enderror" name="seri"value="{{ old('seri') }}" placeholder="Masukkan seri">

                                <!-- error message untuk title -->
                                @error('seri')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label class="font-weight-bold"> Nama laptop</label>
                                <input type="text" class="form-control @error('namalaptop') is-invalid @enderror" name="namalaptop"value="{{ old('namalaptop') }}" placeholder="Masukkan Nama laptop">

                                <!-- error message untuk title -->
                                @error('namalaptop')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label class="font-weight-bold"> jenis</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis"value="{{ old('jenis') }}" placeholder="Masukkan jenis">

                                <!-- error message untuk title -->
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label class="font-weight-bold"> hargajual</label>
                                <input type="text" class="form-control @error('hargajual') is-invalid @enderror" name="hargajual"value="{{ old('hargajual') }}" placeholder="Masukkan hargajual">

                                <!-- error message untuk title -->
                                @error('hargajual')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

