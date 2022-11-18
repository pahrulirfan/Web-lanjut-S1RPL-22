<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::all();
//        dd($data);
        return view('kelas/index', compact('data'));
    }

    public function create()
    {
        return view('kelas/form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fakultas' => 'required|min:5',
            'prodi' => 'required',
            'kelas' => 'required',
            'isi' => 'required|integer'
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelas.index');
    }

}
