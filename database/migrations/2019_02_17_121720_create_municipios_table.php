<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'municipios';

    /**
     * Run the migrations.
     * @table municipios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_municipio');
            $table->string('nombre', 45);
            $table->string('clima')->default('Información no disponible');
            $table->integer('numero_habitantes');
            $table->longText('historia_general');
            $table->string('escudo')->nullable()->default(null);
            $table->string('mapa')->nullable()->default(null);
            $table->integer('id_region')->unsigned();
            $table->timestamps();

            $table->index(["id_region"], 'fk_municipios_regiones1_idx');
            
            $table->unique(["nombre"], 'nombre_UNIQUE');


            $table->foreign('id_region', 'fk_municipios_regiones1_idx')
                ->references('id_region')->on('regiones')
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
