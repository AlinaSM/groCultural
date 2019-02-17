<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaunaHasImagensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'fauna_imagenes';

    /**
     * Run the migrations.
     * @table fauna_imagenes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_fauna')->unsigned();
            $table->integer('id_imagen')->unsigned();
            $table->timestamps();

            $table->index(["id_fauna"], 'fk_fauna_has_imagenes_fauna1_idx');

            $table->index(["id_imagen"], 'fk_fauna_has_imagenes_imagenes1_idx');


            $table->foreign('id_fauna', 'fauna_imagenes_id_fauna')
                ->references('id_fauna')->on('fauna')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_imagen', 'fk_fauna_has_imagenes_imagenes1_idx')
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
