<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioHasLenguajesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'municipios_lenguajes';

    /**
     * Run the migrations.
     * @table municipios_lenguajes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_lengua')->unsigned();
            $table->integer('id_municipio')->unsigned();
            $table->timestamps();

            $table->index(["id_municipio"], 'fk_municipio_municipio_idx');

            $table->index(["id_lengua"], 'fk_lengua_lengua_idx');


            $table->foreign('id_lengua', 'municipios_lenguajes_id_lengua')
                ->references('id_lengua')->on('lenguajes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_municipio', 'fk_municipio_municipio_idx')
                ->references('id_municipio')->on('municipios')
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
