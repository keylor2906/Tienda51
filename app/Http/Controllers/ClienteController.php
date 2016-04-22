<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes;

class ClienteController extends Controller
{

	public function __construct()
	{
		//$this->middleware('auth');
	}

    public function index()
    {
    	return view('cliente.index');
    }

    public function store(Request $request){
        $usuario= \DB::table('usuario')->insert([
        'nombre' => $request->nombre,
        'nick' => $request->nick,
        'email' =>  $request->email,
        'password' => \Hash::make($request->password),
        'tipo' => 2,
        ]);

        return redirect('/');
    }

    public function logout(){
    	session()->flush();
    	return redirect('/');
    }
}
