<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreEditions extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_editions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('edition')->unsigned();
            $table->string('unit', 64)->default('шт');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_editions');
    }
}
