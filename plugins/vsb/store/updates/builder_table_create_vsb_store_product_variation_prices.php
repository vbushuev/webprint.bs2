<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbStoreProductVariationPrices extends Migration
{
    public function up()
    {
        Schema::create('vsb_store_product_variation_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('edition_id')->unsigned();
            $table->integer('variation_id')->unsigned();
            $table->decimal('price', 12, 2);
            $table->decimal('stock_price', 12, 2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_store_product_variation_prices');
    }
}
