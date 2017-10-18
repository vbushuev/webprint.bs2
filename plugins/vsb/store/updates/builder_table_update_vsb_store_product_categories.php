<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductCategories extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_categories', function($table)
        {
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_categories', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
