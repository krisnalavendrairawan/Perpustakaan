@extends('partials.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit pinjam</h1>
    </div>

    <div class="col-lg-8">

        <form method="POST" action="{{ route('pinjam.store') }}" class="mb-3">
            @csrf
                <input type="hidden" name="id" value="{{ $pinjam->id }}">
                <div class="mb-3">
                        <label for="id_anggota">Peminjam</label>
                        <select name="id_anggota" id="id_anggota" class="form-control">
                            @foreach ($anggota as $item => $value)
                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                            @endforeach
                        </select>

                </div>
                <div class="mb-3">
                        <label for="no_buku">Judul</label>
                        <select name="no_buku" id="no_buku" class="form-control">
                            @foreach ($buku as $item => $value)
                                <option value="{{ $value->id }}">{{ $value->judul }}</option>
                            @endforeach
                        </select>

                </div>

                <div class="mb-3">

                    <label for="tgl_pinjam">Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pinjam" value="{{ $pinjam->tgl_pinjam }}">
                </div>


            <div class="mb-3">

                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" name="tgl_kembali" value="{{ $pinjam->tgl_kembali }}">
            </div>

            
                <button type="submit" class="btn btn-primary">Edit Pinjaman</button>
        </form>

        
    </div>

@endsection