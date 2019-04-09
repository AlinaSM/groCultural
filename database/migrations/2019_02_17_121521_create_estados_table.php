<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
     /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estados';

    /**
     * Run the migrations.
     * @table estados
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_estado');
            $table->string('nombre', 45);
            $table->string('capital', 45)->default('Información no disponible');
            $table->integer('extension_territorial');
            $table->string('gentilicio', 45)->default('Información no disponible');
            $table->integer('numero_municipios');
            $table->longText('descripcion');
            $table->string('imagen_estado')->nullable()->default(null);
            $table->string('imagen_escudo')->nullable()->default(null);
            $table->timestamps();
            
            $table->unique(["nombre"], 'nombre_UNIQUE');
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
