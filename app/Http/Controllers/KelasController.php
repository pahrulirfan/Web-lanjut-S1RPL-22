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
}
