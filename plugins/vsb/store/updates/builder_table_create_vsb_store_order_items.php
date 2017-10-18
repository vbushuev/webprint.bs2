<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreOrderItems extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_order_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('product_id')->unsigned();
            $table->decimal('price', 12, 2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_order_items');
    }
}
