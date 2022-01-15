<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
 public function login()
 {
    $users = User::all();
     return view('auth.login', compact(['users']));
 }

 public function postlogin(Request $request)
 {
    $users = User::all();
    $dokument = Dokumen::all();
    
    if (Auth::attempt($request->only('nip', 'password', 'role'))) {
        return view('role.dashboard', compact(['dokument']));
    }

    return redirect('/login');
}

public function create(Request $request)
{

    $dokument = Dokumen::create($request->all());
    return redirect('/guru/dashboard');



}



}
