<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiClienteController extends Controller
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
        return response()->json([
            "Success" => true,
            "message" => "Lista De Clientes",
            "data" => $clientes
        ]);
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
        //
        $datosvalida = Validator::make(
            $request->all(),
            [
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
            ],

            [
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
            ]
        );

        // $this->validate($request, $datosvalida, $mesajerror);

        if ($datosvalida->fails()) {

            //return  $datosvalida->errors();
            return response()->json([
                "Success" => false,
                "message" => "LLene Todos los datos ",
                "data" => $datosvalida->errors()
            ]);
        } else {
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
            return response()->json([
                "Success" => true,
                "message" => "Se Registraron Los Datos Del Cliente "
            ]);
        }
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
        //
        $datosvalida = Validator::make(
            $request->all(),
            [
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
            ],

            [
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
            ]
        );

        // $this->validate($request, $datosvalida, $mesajerror);

        if ($datosvalida->fails()) {

            //return  $datosvalida->errors();
            return response()->json([
                "Success" => false,
                "message" => "LLene Todos los datos ",
                "data" => $datosvalida->errors()
            ]);
        } else {


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
            return response()->json([
                "Success" => true,
                "message" => "Se Actualizaron Los Datos Del Cliente "
            ]);
        }
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
        $delete = Cliente::destroy($id);

        if ($delete) {
            return response()->json([
                "Success" => true,
                "message" => "Se Elimino Los Datos Del Cliente "
            ]);
        } else {
            return response()->json([
                "Success" => false,
                "message" => "Erro Al Eliminar "
            ]);
        }
    }
}
