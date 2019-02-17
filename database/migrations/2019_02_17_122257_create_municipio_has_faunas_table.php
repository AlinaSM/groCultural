<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioHasFaunasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'fauna_municipios';

    /**
     * Run the migrations.
     * @table fauna_municipios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_Fauna')->unsigned();
            $table->integer('id_municipio')->unsigned();
            $table->timestamps();

            $table->index(["id_municipio"], 'fk_Fauna_has_municipios_municipios1_idx');

            $table->index(["id_Fauna"], 'fk_Fauna_has_municipios_Fauna1_idx');


            $table->foreign('id_Fauna', 'fauna_municipios_id_Fauna')
                ->references('id_fauna')->on('fauna')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_municipio', 'fk_Fauna_has_municipios_municipios1_idx')
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
