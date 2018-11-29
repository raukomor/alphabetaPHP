<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\User;
use App\Resposta;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        $users = User::all();
        $respostas = Resposta::all();
        return view('comentario.comentario',compact('comentarios','users','respostas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destino = '/comentario/store';
        $dsComentario = null;
        $cdUsuario = null;
        return view('comentario.registrar',compact(['destino','dsComentario','cdUsuario']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comentario::create($request->all());
        var_dump($request->all());
        return redirect('/comentario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::find($id);
        $dsComentario = $comentario->dsComentario;
        $cdUsuario = $comentario->cdUsuario;
        $destino = '/comentario/update/' . $comentario->id;
        return view ('comentario.registrar',compact(['dsComentario','cdUsuario','destino']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Comentario::find($id)->update($request->all());
        return redirect('/comentario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       $respostas = Resposta::all();
            foreach($respostas as $resposta){
                if($resposta->cdComentario == $id){
                    Resposta::find($resposta->id)->delete();
                }
            }

            Comentario::find($id)->delete();
            return redirect('/comentario');
    }
}
