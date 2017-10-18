<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreProducts extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('type', 64);
            $table->string('sku', 64);
            $table->decimal('price', 12, 2);
            $table->decimal('stock_price', 12, 2)->nullable();
            $table->dateTime('stock_start')->nullable();
            $table->dateTime('stock_end')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_products');
    }
}
