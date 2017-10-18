<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreProductTemplates extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_product_templates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('product_id')->unsigned();
            $table->text('path');
            $table->text('raw');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_product_templates');
    }
}
