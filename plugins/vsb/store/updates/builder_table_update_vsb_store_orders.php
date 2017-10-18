<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreOrders extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_orders', function($table)
        {
            $table->text('comments');
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_orders', function($table)
        {
            $table->dropColumn('comments');
        });
    }
}
