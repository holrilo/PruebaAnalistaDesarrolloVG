<?php

use App\Models\Tipo_Cliente;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cliente', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id_tipo_cliente');
            $table->string('desc_tipo_cliente');

            $table->timestamps();
        });
        $datos = array(
            [
                'desc_tipo_cliente' => 'Cliente Frecuente'
            ],
            [
                'desc_tipo_cliente' => 'Cliente VIP'
            ],
        );

        foreach ($datos as $dato) {
            $tipo_cliente = new Tipo_Cliente();
            $tipo_cliente->desc_tipo_cliente = $dato['desc_tipo_cliente'];
            $tipo_cliente->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_cliente');
    }
}
