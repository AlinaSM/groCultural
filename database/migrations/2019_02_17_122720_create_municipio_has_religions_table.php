<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioHasReligionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'municipios_religiones';

    /**
     * Run the migrations.
     * @table municipios_religiones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_municipio')->unsigned();
            $table->integer('id_religion')->unsigned();
            $table->timestamps();

            $table->index(["id_municipio"], 'fk_municipio_religion_municipios_idx');

            $table->index(["id_religion"], 'fk_municipio_religion_religiones_idx');


            $table->foreign('id_municipio', 'municipios_religiones_id_municipio')
                ->references('id_municipio')->on('municipios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_religion', 'fk_municipio_religion_religiones_idx')
                ->references('id_religion')->on('religiones')
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
