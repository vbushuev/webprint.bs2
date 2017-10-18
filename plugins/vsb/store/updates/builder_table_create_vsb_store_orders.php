<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreOrders extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('user_id')->unsigned();
            $table->decimal('total', 12, 2);
            $table->decimal('discount', 12, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_orders');
    }
}
