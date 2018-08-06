<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Events\AlunoCadastrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;

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
        return view('exemplo.aluno.index', compact('alunosModel'));
    }

    public function inativos()
    {
        $alunosModel = Aluno::onlyTrashed()->get();
        return view('exemplo.aluno.inativo', compact('alunosModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exemplo.aluno.create', []);
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

        try {

            DB::transaction(function() use ($request) {
                Aluno::create($request->all());
            });

            event(new AlunoCadastrado());
//            Event::fire('AlunoCadastrado');

        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('aluno.index');

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
        return view('exemplo.aluno.edit', compact('aluno'));
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

//        $this->authorize('aluno_update', $aluno);
        if(Gate::denies('aluno_update', $aluno)) {
            dd('não permitido');
        }
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
        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $aluno = Aluno::withTrashed()->find($id);
        $aluno->restore();
        return redirect()->back();
    }
}
