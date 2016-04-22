<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mensaje;

class mensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $mensaje = Mensaje::create($request->all());
        if($mensaje){
            //alert("mensaje enviado");
            //$request->session
            return redirect('/index');
        }
        //return"ok";

        /*$mensaje = new Mensaje;
        $mensaje->nombre = $request->nombre;
        $mensaje->email = $request->email;
        $mensaje->asunto = $request->asunto;
        $mensaje->mensaje = $request->mensaje;

        $mensaje->save();

        return"OK";*/

        //return $request->all();
        
        /*$mensaje = \DB::table('mensaje')->insert([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'asunto' => $request->asunto,
                'mensaje' => $request->mensaje,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        
        if($mensaje){
            //alert("mensaje enviado");
            //$request->session
            return redirect('/contacto');
        }*/

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
