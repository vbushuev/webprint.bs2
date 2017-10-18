<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreCart extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_cart', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->decimal('total', 12, 2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_cart');
    }
}
