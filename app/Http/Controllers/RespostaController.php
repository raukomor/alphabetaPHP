<?php

namespace App\Http\Controllers;

use App\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
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
    public function create($id)
    {
        $destino = '/resposta/store';
        $dsResposta = null;
        $cdComentario = $id;
        $cdADM = null;
        return view('resposta.registrar',compact(['destino','dsResposta','cdADM','cdComentario']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Resposta::create($request->all());
        var_dump($request->all());
        return redirect('/comentario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function show(Resposta $resposta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resposta = Resposta::find($id);
        $dsResposta = $resposta->dsResposta;
        $cdComentario = $resposta->cdComentario;
        $cdADM = $resposta->cdADM;
        $destino = '/resposta/update/' . $resposta->id;
        return view ('resposta.registrar',compact(['dsResposta','cdComentario','cdADM','destino']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Resposta::find($id)->update($request->all());
        return redirect('/comentario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resposta::find($id)->delete();
        return redirect('/comentario');
    }
}
