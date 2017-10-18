<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreCategories extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_categories', function($table)
        {
            $table->text('image')->nullable();
            $table->smallInteger('order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_categories', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('order');
        });
    }
}
