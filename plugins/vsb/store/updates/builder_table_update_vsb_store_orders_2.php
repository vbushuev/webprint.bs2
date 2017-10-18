<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreOrders2 extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_orders', function($table)
        {
            $table->string('status', 64)->default('new');
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_orders', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
