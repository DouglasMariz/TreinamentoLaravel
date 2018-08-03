<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunosModel = Aluno::all();
        return view('aluno.index', compact('alunosModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Validator*/
        $this->validate(
            $request,
            ['nome' => 'required'],
            ['required' => 'O :attribute é Obrigatório'],
            ['nome' => 'Nome do Aluno']
        );

        /*Salval instanciando o objeto*/
//        $alunoModel = new Aluno();
//        $alunoModel->fill($request->all());
//        $alunoModel->save();
        /*Salvar com método estaticos sem precisar instanciar*/
        Aluno::create($request->all());
        return redirect('aluno');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('aluno.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        /*Validator*/
        $this->validate(
            $request,
            ['nome' => 'required'],
//Comentada esta linha porque foi adicionado o arquivo validation.php de validação padrão do laravel. resources/lang/pt-br/validation.php
//            ['required' => 'O :attribute é Obrigatório'],
            [],
            ['nome' => 'Nome do Aluno']
        );
        $aluno->update($request->all());
        return redirect('aluno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
