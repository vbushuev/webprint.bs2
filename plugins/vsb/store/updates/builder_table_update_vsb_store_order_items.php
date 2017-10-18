<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreOrderItems extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_order_items', function($table)
        {
            $table->integer('order_id')->unsigned();
            $table->integer('address_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_order_items', function($table)
        {
            $table->dropColumn('order_id');
            $table->dropColumn('address_id');
        });
    }
}
