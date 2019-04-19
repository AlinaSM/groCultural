<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'regiones';

    /**
     * Run the migrations.
     * @table regiones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_region');
            $table->string('nombre', 45);
            $table->string('capital_regional', 45)->default('Información no disponible');
            $table->string('extension_territorial', 45)->default('Información no disponible');
            $table->string('ubicacion_geografica', 45)->default('Información no disponible');
            $table->string('numero_habitantes')->nullable()->default('Información no disponible');
            $table->string('disponibilidad', 45)->default('Disponible');
            $table->integer('numero_municipios');
            $table->longText('descripcion');
            $table->string('mapa')->nullable()->default(null);
            $table->integer('id_estado')->unsigned();
            $table->timestamps();

            $table->index(["id_estado"], 'fk_regiones_estados1_idx');
            
            $table->unique(["nombre"], 'nombre_UNIQUE');

            $table->foreign('id_estado', 'fk_regiones_estados1_idx')
                ->references('id_estado')->on('estados')
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
