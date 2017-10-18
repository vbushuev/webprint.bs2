<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductPrices extends Migration
{
    public function up()
    {
        Schema::rename('vsb_store_product_variation_prices', 'vsb_store_product_prices');
        Schema::table('vsb_store_product_prices', function($table)
        {
            $table->integer('paper_id')->nullable()->unsigned();
            $table->integer('variation_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::rename('vsb_store_product_prices', 'vsb_store_product_variation_prices');
        Schema::table('vsb_store_product_variation_prices', function($table)
        {
            $table->dropColumn('paper_id');
            $table->integer('variation_id')->nullable(false)->change();
        });
    }
}
