<?php namespace Vsb\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsbStoreProductTemplates2 extends Migration
{
    public function up()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->renameColumn('path', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('vsb_store_product_templates', function($table)
        {
            $table->renameColumn('name', 'path');
        });
    }
}
