<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductTemplates extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('stock_price', 12, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('stock_price');
        });
    }
}
