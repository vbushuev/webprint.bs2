<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreProductImages extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_product_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('path');
            $table->integer('product_id')->unsigned();
            $table->integer('order')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_product_images');
    }
}
