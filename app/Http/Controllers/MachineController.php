<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;

class MachineController extends Controller
{

    /**
     * Retorna todos as máquinas cadastradas
     */
    public function machines()
    {

        $dados = Machine::all();

        return view('machines')->with('machines', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('form-adicionar');
    }

    /**
     * Método que vai adicionar um equipamento no BD
     */
    public function adicionar(Request $request)
    {

        //Atribuição em massa
        Machine::create($request->input());

        return redirect()->action('MachineController@machines');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Machine::destroy($id);

        return redirect()->action('MachineController@machines');
    }

    public function form_editar($id)
    {
        //Buscar o equipamento no BD pelo id
        $machine = Machine::find($id);

        //chamando a view e passando o dado do equipamento
        return view('form-editar')->with('machine', $machine);

    }

    public function editar(Request $request)
    {
        //VIa atribuicao em massa
        Machine::find($request->id)->update($request->input());

        return redirect()->action('MachineController@machines');
    }
}
