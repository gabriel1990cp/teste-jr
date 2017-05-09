<?php

namespace App\Http\Controllers;

use App\Vendedor;
use App\VendedorCad;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        #LISTA OS FORNECEDORES
        $vendedores = \DB::connection()->select('SELECT 
          x1.id, x1.valor_comissao,(x1.valor_comissao * 0.085) as comissao, x2.nome, x2.email
          FROM
          vendedores_cad x1
          JOIN
          vendedores x2 ON x1.vendedor = x2.id ORDER BY x1.id ASC');

        return view('listagem')->with("vendedores", $vendedores);
    }

    public function cadastro()
    {
        #LISTA OS FORNECEDORES
        $vendedores = Vendedor::all();
        return view('cadastro')->with("vendedores", $vendedores);
    }

    public function salvar(Request $request)
    {
        $vendedorCad = new VendedorCad();

        $vendedor = $request->input('vendedor');
        $valor_comissao = str_replace_last('.', '',$request->input('valor_comissao'));
        $valor_comissao = str_replace_last(',', '.',$valor_comissao);

        $vendedorCad = $vendedorCad->insert(array('vendedor' => $vendedor, 'valor_comissao' => $valor_comissao));

        if ($vendedorCad)
        {
            return redirect('/');
        }else {
            return redirect('cadastrar');
        }
    }

}
