<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductVariationPrices extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_variation_prices', function($table)
        {
            $table->decimal('stock_price', 12, 2)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_variation_prices', function($table)
        {
            $table->decimal('stock_price', 12, 2)->nullable(false)->change();
        });
    }
}
