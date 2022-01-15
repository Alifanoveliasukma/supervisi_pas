<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class GuruController extends Controller
{
    public function index()
    {
       $dokument = Dokumen::all();
        return view('layout.include.fitur.include.content', compact(['dokument']));
    }

    public function create2(Request $request)
    {
        Dokumen::create($request->all());
        
        return redirect()->route('home');
    }
    public function home()
    {
        $dokument = Dokumen::all();
        return view('role.dashboard', compact(['dokument']));

    }
    public function update(Request $request)
    {
        $dokument = Dokumen::all();
        $dokument->update($request->all());
        return view('role.dashboard', compact(['dokument']));
    }

    
}
