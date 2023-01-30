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
      <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Create New Buku</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">Jenis Buku</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($buku as $item)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->pengarang }}</td>
              <td>{{ $item->tahun_terbit }}</td>
              <td>{{ $item->jenis_buku }}</td>
                
              @if ($item->status == 1)
                <td><span class="badge bg-warning">tidak tersedia</span></td>
                
              @elseif ($item->status == 0)
              <td><span class="badge bg-success">tersedia</span></td>
                
              @endif
              
              <td>
                <a href="{{ route('buku') }}/{{ $item->id }}/edit" class="btn btn-warning"> <span data-feather="edit"></span>edit</a>
                <a href="/buku/{{ $item->id }}" onclick="return confirm('apakah ada yakin ingin hapus?')" class="btn btn-danger">Hapus</a>

              </td>
            </tr>
            
          @endforeach
            
          </tbody>
        </table>
      </div>

      
@endsection
