<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function kepsek()
    {
        return view('role.kepsek');
    }

    public function guru()
    {
        return view('role.guru');
    }

    public function kurikulum()
    {
        return view('role.kurikulum');
    }

    public function fiturkurikulum()
    {
        return view('role.fitur.kurikulum_fitur');
    }

    public function fiturkepsek()
    {
        return view('role.fitur.kepsek_fitur');
    }

    public function fiturguru()
    {
        $dokument = Dokumen::all();
        return view('role.fitur.guru_fitur', compact(['dokument']));
    }

    
}
