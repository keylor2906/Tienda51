<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdministradorController extends Controller
{

	public function __construct()
	{
		//$this->middleware('auth');
	}

    public function index()
    {
    	return view('administrador.panel');
    }

    public function logout(){
    	session()->flush();
    	return redirect('/');
    }
}
