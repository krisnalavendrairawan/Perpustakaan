<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;
use Carbon\Carbon;
use App\Models\Anggota;
use App\Models\Buku;


class PinjamController extends Controller
{
    public function index(){
        return view('pinjam.index', [
            'active' => 'peminjaman.index',
            'pinjam' => Pinjam::all(),
            'anggota' => Anggota::all(),
            'buku' => Buku::all()

        ]);
    }

    public function create(){
        return view('pinjam.create', [
            'anggota' => Anggota::all(),
            'buku' => Buku::all(),
            'pinjam' => Pinjam::all()
            
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'id_anggota' => 'required',
            'no_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',


        ], [
            'id_anggota.required' => 'id anggota harus diisi',
            'no_buku.required' => 'no buku harus diisi',
            'tgl_pinjam.required' => 'tanggal pinjam Terbit harus diisi',
            'tgl_kembali.required' => 'tanggal kembali Buku harus diisi',

        ]);


        Pinjam::updateOrCreate([
            'id' => $request->id
        ], $validatedData);
        return redirect('/pinjam')->with('success', 'Anggota saved!');
    }

    public function edit($id){
        return view('pinjam.edit', [
            'pinjam' => Pinjam::find($id),
            'anggota' => Anggota::all(),
            'buku' => Buku::all()
        ]);
    }

    public function destroy($id){
        $pinjam = Pinjam::find($id);
        $pinjam->delete();
        return redirect('/buku')->with('success', 'Anggota deleted!');
    }

}
