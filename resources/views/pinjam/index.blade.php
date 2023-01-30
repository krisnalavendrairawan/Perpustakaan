@extends('partials.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Anggota</h1>
    </div>

    @if (session()->has('success'))
      
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>

    @endif


    <div class="table-responsive col-lg-8">
      <a href="{{ route('pinjam.create') }}" class="btn btn-primary mb-3">Create Peminjaman</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Peminjam</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($pinjam as $item)
            
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->anggota->nama }}</td>
              <td>{{ $item->buku->judul }}</td>
              <td>{{ $item->tgl_pinjam }}</td>
              <td>{{ $item->tgl_kembali }}</td>
              <td>
                <a href="{{ route('pinjam') }}/{{ $item->id }}/edit" class="btn btn-warning"> <span data-feather="edit"></span>edit</a>
                <a href="/pinjam/{{ $item->id }}" onclick="return confirm('apakah ada yakin ingin hapus?')" class="btn btn-danger">Hapus</a>

              </td>
            </tr>
            
          @endforeach
            
          </tbody>
        </table>
      </div>

      
@endsection
