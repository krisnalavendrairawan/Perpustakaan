@extends('partials.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Buku</h1>
    </div>

    <div class="col-lg-8">
        <a href="{{ route('buku') }}" class="btn btn-primary mb-4">Kembali</a>

        <form method="POST" action="{{ route('buku.store') }}" class="mb-3">
            @csrf
            @method('POST')
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $buku->id }}">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" autofocus value="{{ old('judul', $buku->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control  @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang" autofocus value="{{ old('pengarang', $buku->pengarang) }}">

                @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control  @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" autofocus value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">

                @error('tahun_terbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="jenis_buku" class="form-label">Jenis Buku</label>
                <input type="text" class="form-control  @error('jenis_buku') is-invalid @enderror" id="jenis_buku" name="jenis_buku" autofocus value="{{ old('jenis_buku', $buku->jenis_buku) }}">

                @error('jenis_buku')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <select name="status" id="status" class="form-control">
                    <option value="0" {{ $buku->status == 0 ? 'selected' : '' }}>Tersedia</option>
                    <option value="1" {{ $buku->status == 1 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">SImpan</button>
        </form>

        
    </div>

@endsection