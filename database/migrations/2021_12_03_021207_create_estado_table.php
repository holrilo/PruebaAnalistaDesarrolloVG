<?php

use App\Models\Estado;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id_estado');;
            $table->string('desc_estado');

            $table->timestamps();
        });

        $datos = array(
            ['desc_estado' => 'Activo'],
            ['desc_estado' => 'Inactivo'],
            ['desc_estado' => 'Suspendido']
        );

        foreach ($datos as $dato) {
            $estado = new Estado();
            $estado->desc_estado = $dato['desc_estado'];
            $estado->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado');
    }
}
