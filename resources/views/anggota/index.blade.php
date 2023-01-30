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
      <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Create New Anggota</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">kota</th>
              <th scope="col">No Telp</th>
              <th scope="col">Tgl Lahir</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($anggota as $item)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->kota }}</td>
              <td>{{ $item->no_telp }}</td>
              <td>{{ $item->tgl_lahir }}</td>
              <td>
                <a href="{{ route('anggota.index') }}/{{ $item->id }}/edit" class="btn btn-warning"> <span data-feather="edit"></span>edit</a>
                <a href="/anggota/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                {{-- <form action="/anggota/{{ $item->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle" ><span data-feather="x-circle"></span>hapus</button>

                </form> --}}

              </td>
            </tr>
            
          @endforeach
            
          </tbody>
        </table>
      </div>

      
@endsection
