<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioHasTradicionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'municipios_tradiciones';

    /**
     * Run the migrations.
     * @table municipios_tradiciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_municipio')->unsigned();
            $table->integer('id_tradicion')->unsigned();
            $table->timestamps();
            
            $table->index(["id_municipio"], 'fk_muni_tradi_municipios_idx');

            $table->index(["id_tradicion"], 'fk_muni_tradi_tradiciones_idx');


            $table->foreign('id_municipio', 'fk_muni_tradi_municipios_idx')
                ->references('id_municipio')->on('municipios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_tradicion', 'fk_muni_tradi_tradiciones_idx')
                ->references('id_tradicion')->on('tradiciones')
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
