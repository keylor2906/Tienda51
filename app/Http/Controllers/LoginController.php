<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (Auth::check()) {
            if(Auth::user()->tipo==1){
                return redirect('/administrador/panel');
            }
            else{
                return redirect('/cliente/index');
            }
        }
        return view('website.ingresar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            //variable de sesiondel usuario
            $usuario=Auth::user();

            if (Auth::check()) {
               // return Auth::user(); //datos del usuario
                if(Auth::user()->tipo==1){
                    $request->session()->put('administrador',$usuario);
                    return redirect('/administrador');
                }
                else{
                    $request->session()->put('cliente',$usuario);
                    return redirect('/cliente');
                }
            }
            return back();
        }
        return back()->with('error', true); //with permite crear variables de tipo flash
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
