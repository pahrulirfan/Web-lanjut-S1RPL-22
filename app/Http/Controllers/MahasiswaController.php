<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = MahasiswaModel::all();
        $no = 0;
        // dd($data);
        return view('mahasiswa', compact('data', 'no'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
