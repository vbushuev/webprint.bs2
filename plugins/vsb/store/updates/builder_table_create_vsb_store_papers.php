<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStorePapers extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_papers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 128);
            $table->text('description')->nullable();
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_papers');
    }
}
