<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PacienteModel;
use Illuminate\Http\Request;

class ControllerPaciente extends Controller
{
    public readonly pacienteModel $paciente;
    
    public function __construct(){
        $this->cliente = new pacienteModel();

    }
    public function index(){
        $paciente_=$this->paciente->all();
        return view('pacienteIndex',['paciente_tb'=>$paciente_]);
    
        // return view('animais');
        }

    public function create()
    {
        return view('pacienteCreate');
    }

    public function store(Request $request)
    {
        pacienteModel::create($request->all());
        return redirect()->route('paciente.index')->with('success', 'paciente criado com sucesso.');
    }

    public function edit($id)
    {
        $paciente = pacienteModel::findOrFail($id);
        return view('pacienteEdit', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $paciente = pacienteModel::findOrFail($id);
        $paciente->update($request->all());
        return redirect()->route('paciente.index')->with('success', 'paciente atualizado.');
    }

    public function destroy($id)
    {
        $paciente = pacienteModel::findOrFail($id);
        $paciente->delete();
        return redirect()->route('paciente.index')->with('success', 'paciente removido.');
    }
}
