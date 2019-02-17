<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitioInteresHasImagensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'intereses_culturales_has_imagenes';

    /**
     * Run the migrations.
     * @table intereses_culturales_has_imagenes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_interes_cult')->unsigned();
            $table->integer('id_imagen')->unsigned();
            $table->timestamps();

            $table->index(["id_imagen"], 'fk_intereses_culturales_has_imagenes_imagenes1_idx');

            $table->index(["id_interes_cult"], 'fk_intereses_culturales_has_imagenes_intereses_culturales1_idx');


            $table->foreign('id_interes_cult', 'fk_intereses_culturales_has_imagenes_intereses_culturales1_idx')
                ->references('id_interes_cult')->on('intereses_culturales')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_imagen', 'fk_intereses_culturales_has_imagenes_imagenes1_idx')
                ->references('id_imagen')->on('imagenes')
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
