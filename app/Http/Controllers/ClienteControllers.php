<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Estado;
use App\Models\Tipo_Cliente;
use App\Models\Tipo_id;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClienteControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tiposids = Tipo_id::all();
        $estados = Estado::all();
        $tipoclies = Tipo_Cliente::all();
        return view('cliente.create', compact('tiposids', 'estados', 'tipoclies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosvalida = [
            'txtTid' => 'required|integer|max:10',
            'txtNid' => 'required|integer',
            'txtPnom' => 'required|string|max:50',
            //'txtSnom' => 'required|string|max:50',
            'txtPape' => 'required|string|max:50',
            'txtSape' => 'required|string|max:50',
            'txtCorreo' => 'required|string|max:100',
            'txtTel' => 'required|string|max:100',
            'txtEstado' => 'required|integer|max:100',
            'txtTipCli' => 'required|integer|max:100'
        ];

        $mesajerror = [
            'txtTid.required' => 'El Campo es Obligatorio',
            'txtTid.integer' => 'El Campo es Obligatorio',
            'txtNid.required' => 'El Campo es Obligatorio',
            'txtPnom.required' => 'El Campo es Obligatorio',
            'txtSnom.required' => 'El Campo es Obligatorio',
            'txtPape.required' => 'El Campo es Obligatorio',
            'txtSape.required' => 'El Campo es Obligatorio',
            'txtCorreo.required' => 'El Campo es Obligatorio',
            'txtTel.required' => 'El Campo es Obligatorio',
            'txtEstado.required' => 'El Campo es Obligatorio',
            'txtEstado.integer' => 'Seleccione un estado',
            'txtTipCli.required' => 'El Campo es Obligatorio',
            'txtTipCli.integer' => 'Seleccione un estado',
        ];

        $this->validate($request, $datosvalida, $mesajerror);

        $cliente = new Cliente();


        $cliente->id_tipo_id = $request->txtTid;
        $cliente->num_id_cliente = $request->txtNid;
        $cliente->nom_cliente_1 = $request->txtPnom;
        $cliente->nom_cliente_2 = isset($request->txtSnom) ? $request->txtSnom : " ";
        $cliente->ape_cliente_1 = $request->txtPape;
        $cliente->ape_cliente_2 = $request->txtSape;
        $cliente->correo_cliente = $request->txtCorreo;
        $cliente->tel_cliente = $request->txtTel;
        $cliente->fecha_creacion = Carbon::now();
        $cliente->id_estado = $request->txtEstado;
        $cliente->id_tipo_cliente = $request->txtTipCli;

        $cliente->save();


        return redirect('cliente')->with('mensaje', 'Registro Creado');
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
        $clientes = Cliente::findOrFail($id);
        $tiposids = tipo_id::all();
        $estados = Estado::all();
        $tipoclies = Tipo_Cliente::all();
        return view('cliente.edit', compact('clientes', 'tiposids', 'estados', 'tipoclies'));
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
        $datosvalida = [
            'txtTid' => 'required|integer|max:10',
            'txtNid' => 'required|integer',
            'txtPnom' => 'required|string|max:50',
            //'txtSnom' => 'required|string|max:50',
            'txtPape' => 'required|string|max:50',
            'txtSape' => 'required|string|max:50',
            'txtCorreo' => 'required|string|max:100',
            'txtTel' => 'required|string|max:100',
            'txtEstado' => 'required|integer|max:100',
            'txtTipCli' => 'required|integer|max:100'
        ];

        $mesajerror = [
            'txtTid.required' => 'El Campo es Obligatorio',
            'txtTid.integer' => 'El Campo es Obligatorio',
            'txtNid.required' => 'El Campo es Obligatorio',
            'txtPnom.required' => 'El Campo es Obligatorio',
            'txtSnom.required' => 'El Campo es Obligatorio',
            'txtPape.required' => 'El Campo es Obligatorio',
            'txtSape.required' => 'El Campo es Obligatorio',
            'txtCorreo.required' => 'El Campo es Obligatorio',
            'txtTel.required' => 'El Campo es Obligatorio',
            'txtEstado.required' => 'El Campo es Obligatorio',
            'txtEstado.integer' => 'Seleccione un estado',
            'txtTipCli.required' => 'El Campo es Obligatorio',
            'txtTipCli.integer' => 'Seleccione un estado',
        ];

        $this->validate($request, $datosvalida, $mesajerror);

        $cliente['id_tipo_id'] = $request->txtTid;
        $cliente['num_id_cliente'] = $request->txtNid;
        $cliente['nom_cliente_1'] = $request->txtPnom;
        $cliente['nom_cliente_2'] = isset($request->txtSnom) ? $request->txtSnom : " ";
        $cliente['ape_cliente_1'] = $request->txtPape;
        $cliente['ape_cliente_2'] = $request->txtSape;
        $cliente['correo_cliente'] = $request->txtCorreo;
        $cliente['tel_cliente'] = $request->txtTel;
        //$cliente->fecha_creacion = Carbon::now();
        $cliente['id_estado'] = $request->txtEstado;
        $cliente['id_tipo_cliente'] = $request->txtTipCli;


        //$cliente->update();
        Cliente::where('id_cliente', '=', $id)->update($cliente);

        return redirect('cliente')->with('mensaje', 'Registro Actualizado');
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
        //$cliente = Cliente::findOrFail($id);

        Cliente::destroy($id);

        return redirect('/cliente')->with('mensaje', 'Registro Eliminado');
    }
}
