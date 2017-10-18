<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreCategories extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->integer('parent_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_categories');
    }
}
