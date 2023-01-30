@extends('partials.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create pinjam</h1>
    </div>

    <div class="col-lg-8">

        <form method="POST" action="{{ route('pinjam.store') }}" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="id_anggota" class="form-label">Peminjam</label>
                <select name="id_anggota" id="id_anggota" class="form-control">
                        @foreach ($anggota as $item => $value)
                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="no_buku" class="form-label">Nama Buku</label>
                <select name="no_buku" id="no_buku" class="form-control">
                        @foreach ($buku as $item => $value)
                            @if ($value->status == 1)
                                @continue
                            @endif
                            <option value="{{ $value->id }}">{{ $value->judul }}</option>
                            
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                    <label for="tgl_pinjam">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control">
            </div>


            <div class="mb-3">
                    <label for="tgl_kembali">Tanggal kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control">
            </div>

            
                <button type="submit" class="btn btn-primary">Create Anggota</button>
        </form>

        
    </div>

@endsection