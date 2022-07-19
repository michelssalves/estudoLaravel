<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableContactSitesAddFkReasonContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('contact_sites', function (Blueprint $table) {
        
            $table->unsignedBigInteger('reason_contact_id');

        });

        DB::statement('UPDATE contact_sites SET reason_contact_id = reason');

        Schema::table('contact_sites', function (Blueprint $table) {
        
            $table->foreign('reason_contact_id')->references('id')->on('reason_for_contacts');
            $table->dropColumn('reason');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_sites', function (Blueprint $table) {

            $table->integer('reason');
            $table->dropForeign('contact_site_reason_contact_id_foreign');
            
        });

        DB::statement('UPDATE contact_sites SET reason = reason_contact_id');

        Schema::table('contact_sites', function (Blueprint $table) {
        
            $table->dropColumn('reason_contact_id');

        });
    }
}
