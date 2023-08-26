<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ServicoController extends Controller
{

    public function index()
    {
        $data = array(
            'list' => DB::table('servico')->get()

        );
        return view('servico.index', $data);
    }

    public function list()
    {
        $data = array(
            'list' => DB::table('servico')->get()

        );
        return view('listar-agendamento', $data);
    }

    public function create()
    {
        return view('servico.create');
    }



    function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required',
            'Telefone' => 'required',
            'Endereco' => 'required',
            'Bairro' => 'required',
            'Cep' => 'required',
            'Cidade' => 'required',
            'Estado' => 'required|in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO',
        ]);
    
        $query = DB::table('servico')->insert([
            'Nome' => $request->input('Nome'),
            'Telefone' => $request->input('Telefone'),
            'Endereco' => $request->input('Endereco'),
            'Bairro' => $request->input('Bairro'),
            'Cep' => $request->input('Cep'),
            'Cidade' => $request->input('Cidade'),
            'Estado' => $request->input('Estado'),
        ]);
    
        return redirect()->route('servico.index')->with('success', 'Agendamento criado com sucesso');
    }

    public function edit($id)
    {
        $servico = Servico::find($id);
        return view('servico.edit', ['servico' => $servico]);
    }


    public function update(Request $request, Servico $servico)
    {
        // Validar os dados recebidos no Request
        $validatedData = $request->validate([
            'Nome' => 'required|string|max:255',
            'Telefone' => 'required|string|max:20',
            'Endereco' => 'required|string|max:255',
            'Bairro' => 'required|string|max:100',
            'Cep' => 'required|string|max:10',
            'Cidade' => 'required|string|max:100',
            'Estado' => 'required|string|max:100',
        ]);
    
        // Atualizar o objeto do serviço com os dados validados
        $servico->update($validatedData);
    
        // Redirecionar para a página index
        return Redirect::route('servico.index')->with('success', 'Serviço atualizado com sucesso');
    }

    function destroy($id)
    {
        $query = DB::table('servico')
            ->where('id', $id)
            ->delete();
        if ($query) {
            return back()->with('success', 'Dados deletados com sucesso!');
        } else {
            return back()->with('fail', 'Algo deu errado!');
        }
    }
    
}