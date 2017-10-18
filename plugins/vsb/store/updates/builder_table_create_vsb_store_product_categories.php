<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreProductCategories extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_product_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_product_categories');
    }
}
