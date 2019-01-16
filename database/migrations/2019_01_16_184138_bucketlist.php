<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bucketlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // BucketList schema
        Schema::create('bucketlist', function (Blueprint $table) {
           $table->engine = 'InnoDB';
           $table->increments('id');
           $table->decimal('done', 2);
           $table->string('color');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // destroy bucketlist table
        Schema::dropIfExists('bucketlist');
    }
}
