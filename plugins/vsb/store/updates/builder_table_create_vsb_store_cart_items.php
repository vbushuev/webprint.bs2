<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreCartItems extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_cart_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->integer('product_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_cart_items');
    }
}
