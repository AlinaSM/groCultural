<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLenguajesTable extends Migration
{
    /*
    
    public function up()
    {
        Schema::create('lenguajes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lenguajes');
    }
    */


     /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'lenguajes';

    /**
     * Run the migrations.
     * @table lenguajes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_lengua');
            $table->string('nombre', 45);
            $table->longText('descripcion');
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
