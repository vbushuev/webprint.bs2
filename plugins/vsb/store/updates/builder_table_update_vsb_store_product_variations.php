<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductVariations extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_variations', function($table)
        {
            $table->dropColumn('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_variations', function($table)
        {
            $table->integer('product_id')->unsigned();
        });
    }
}
