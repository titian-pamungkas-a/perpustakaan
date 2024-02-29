<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(){
        // Membatasi data tabel sejumlah 6
        $anggotas = Anggota::paginate(6);
        return view('anggota.index', compact('anggotas'));
    }

    public function create(){
        return view('anggota.create');
    }

    public function store(Request $request){
        // Validasi 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required|numeric|digits_between:9,14',
            'address' => 'required'
        ]);
        Anggota::create($request->all());
        return redirect()->route('anggota')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function show(string $id){
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    public function edit(string $id){
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, string $id){
        $anggota = Anggota::findOrFail($id);
        // Validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required|numeric|digits_between:9,14',
            'address' => 'required'
        ]);
        $anggota->update($request->all());
        return redirect()->route('anggota')->with('success', 'Anggota berhasil diedit');
    }

    public function delete(Request $request, string $id){
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggota')->with('success', 'Anggota berhasil dihapus');
    }
}
