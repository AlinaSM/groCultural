<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitioInteresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'intereses_culturales';

    /**
     * Run the migrations.
     * @table intereses_culturales
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_interes_cult');
            $table->string('nombre');
            $table->longText('descripcion_general');
            $table->string('horario', 250)->default('Información no disponible');
            $table->longText('direccion');
            $table->integer('id_municipio')->unsigned();
            $table->integer('id_tipo_interes')->unsigned();
            $table->timestamps();

            $table->index(["id_municipio"], 'fk_int_culturales_municipios_idx');

            $table->index(["id_tipo_interes"], 'fk_tipo_intereses_culturales_idx');
            
            $table->unique(["nombre"], 'nombre_UNIQUE');


            $table->foreign('id_municipio', 'fk_int_culturales_municipios_idx')
                ->references('id_municipio')->on('municipios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_tipo_interes', 'fk_tipo_intereses_culturales_idx')
                ->references('id_tipo_interes')->on('tipo_intereses_culturales')
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
