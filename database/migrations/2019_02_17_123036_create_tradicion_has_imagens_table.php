<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradicionHasImagensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tradiciones_has_imagenes';

    /**
     * Run the migrations.
     * @table tradiciones_has_imagenes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('tradiciones_id_tradicion')->unsigned();
            $table->integer('imagenes_id_imagen')->unsigned();
            $table->timestamps();

            $table->index(["tradiciones_id_tradicion"], 'fk_tradiciones_has_imagenes_tradiciones1_idx');

            $table->index(["imagenes_id_imagen"], 'fk_tradiciones_has_imagenes_imagenes1_idx');


            $table->foreign('tradiciones_id_tradicion', 'fk_tradiciones_has_imagenes_tradiciones1_idx')
                ->references('id_tradicion')->on('tradiciones')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('imagenes_id_imagen', 'fk_tradiciones_has_imagenes_imagenes1_idx')
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
