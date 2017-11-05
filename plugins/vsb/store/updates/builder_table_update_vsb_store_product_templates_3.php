<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductTemplates3 extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->decimal('price', 9, 2)->change();
            $table->decimal('stock_price', 9, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->decimal('price', 12, 2)->change();
            $table->decimal('stock_price', 12, 2)->change();
        });
    }
}
