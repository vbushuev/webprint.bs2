<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductPrices2 extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_prices', function($table)
        {
            $table->dateTime('stock_start')->nullable();
            $table->dateTime('stock_end')->nullable();
            $table->integer('variation_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_prices', function($table)
        {
            $table->dropColumn('stock_start');
            $table->dropColumn('stock_end');
            $table->integer('variation_id')->unsigned(false)->change();
        });
    }
}
