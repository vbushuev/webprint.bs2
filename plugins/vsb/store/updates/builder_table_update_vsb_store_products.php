<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProducts extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_products', function($table)
        {
            $table->smallInteger('visible')->unsigned()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_products', function($table)
        {
            $table->dropColumn('visible');
        });
    }
}
