<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradicionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tradiciones';

    /**
     * Run the migrations.
     * @table tradiciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_tradicion');
            $table->string('nombre', 45);
            $table->longText('descripcion');
            $table->string('fecha_festejo', 50)->default('Informacion no disponible');
            $table->integer('id_tipo_tradicion')->unsigned();
            $table->timestamps();

            $table->index(["id_tipo_tradicion"], 'fk_tradiciones_tipo_tradicion_idx');
            $table->unique(["nombre"], 'nombre_UNIQUE');


            $table->foreign('id_tipo_tradicion', 'fk_tradiciones_tipo_tradicion_idx')
                ->references('id_tipo_tradicion')->on('tipo_tradicion')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
