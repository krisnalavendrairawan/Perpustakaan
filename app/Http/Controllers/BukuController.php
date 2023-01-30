<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pinjam;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku.index', [
            'active' => 'buku.index',
            'buku' => Buku::all(),
            'pinjam' => Pinjam::all(),


        ]);
    }

    public function create(){
        return view('buku.create', [
            
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required',
            'jenis_buku' => 'required',
            'status' => 'required',


        ], [
            'judul.required' => 'judul harus diisi',
            'pengaang.required' => 'Pengarang harus diisi',
            'tahun_terbit.required' => 'Tahun Terbit harus diisi',
            'jenis_buku.required' => 'Jenis Buku harus diisi',
            'status.required' => 'Status harus diisi',

        ]);


        Buku::updateOrCreate([
            'id' => $request->id
        ], $validatedData);
        return redirect('/buku')->with('success', 'Anggota saved!');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', ['buku' => $buku]);
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('success', 'Anggota deleted!');
    }
}
