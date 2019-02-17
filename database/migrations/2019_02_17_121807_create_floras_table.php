<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlorasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'flora';

    /**
     * Run the migrations.
     * @table flora
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_flora');
            $table->string('nombre', 45);
            $table->string('nombre_cientifico', 45)->default('Informacion no disponible');
            $table->string('genero', 45)->default('Informacion no disponible');
            $table->string('familia', 45)->default('Informacion no disponible');
            $table->string('especie', 45)->default('Informacion no disponible');
            $table->longText('descripcion_general');
            $table->timestamps();
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
