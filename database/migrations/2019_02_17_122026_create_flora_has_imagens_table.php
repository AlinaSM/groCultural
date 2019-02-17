<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloraHasImagensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'flora_imagenes';

    /**
     * Run the migrations.
     * @table flora_imagenes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_flora')->unsigned();
            $table->integer('id_imagen')->unsigned();
            $table->timestamps();

            $table->index(["id_flora"], 'fk_Flora_has_imagenes_Flora1_idx');

            $table->index(["id_imagen"], 'fk_Flora_has_imagenes_imagenes1_idx');


            $table->foreign('id_flora', 'flora_imagenes_id_flora')
                ->references('id_flora')->on('flora')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_imagen', 'fk_Flora_has_imagenes_imagenes1_idx')
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
