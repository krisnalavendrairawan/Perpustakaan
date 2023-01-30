<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        
        return view('anggota.index', ['anggota' => Anggota::all()]);
    }

    public function create(){
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'tgl_lahir' => 'required',

        ], [
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_telp.required' => 'No HP harus diisi',
            'kota.required' => 'Kota harus diisi',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi',

        ]);


        Anggota::updateOrCreate([
            'id' => $request->id
        ], $validatedData);
        return redirect('/anggota')->with('success', 'Anggota saved!');
    }


    public function edit($id){
        $anggota = Anggota::find($id);
        return view('anggota.edit', ['anggota' => $anggota]);
    }

    public function destroy($id)
    {
        Anggota::where('id', $id)->delete();

        return redirect('/anggota')->with('success', 'Anggota deleted!');
    }
        
}
