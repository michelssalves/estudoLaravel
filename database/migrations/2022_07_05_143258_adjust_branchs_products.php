<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustBranchsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('branchs', function(Blueprint $table){
            $table->id();
            $table->string('branch', 30);
            $table->timestamps();

       });

       Schema::create('product_branch', function(Blueprint $table){
        $table->id();
       
        $table->unsignedBigInteger('branch_id');

        $table->unsignedBigInteger('product_id');

        $table->decimal('sale_price', 8, 2);

        $table->integer('minimum_stock');

        $table->integer('maximum_stock');

        $table->timestamps();

        $table->foreign('branch_id')->references('id')->on('branchs');
        $table->foreign('product_id')->references('id')->on('products');


   });
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn((['sale_price', 'minimum_stock', 'maximum_stock']));

        });    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::table('products', function(Blueprint $table){
            $table->decimal('sale_price', 8, 2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
        }); 
        
        Schema::dropIfExists('product_branch');

        Schema::dropIfExists('branchs');
    }
}
