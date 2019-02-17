<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioHasFlorasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'flora_municipios';

    /**
     * Run the migrations.
     * @table flora_municipios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_flora')->unsigned();
            $table->integer('id_municipio')->unsigned();
            $table->timestamps();

            $table->index(["id_municipio"], 'fk_Flora_has_municipios_municipios1_idx');

            $table->index(["id_flora"], 'fk_Flora_has_municipios_Flora1_idx');


            $table->foreign('id_flora', 'flora_municipios_id_flora')
                ->references('id_flora')->on('flora')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_municipio', 'fk_Flora_has_municipios_municipios1_idx')
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
