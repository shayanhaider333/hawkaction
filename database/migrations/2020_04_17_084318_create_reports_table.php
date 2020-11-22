<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade'); 

            $table->integer('camera_id')->unsigned();
            $table->foreign('camera_id')->references('id')->on('cameras')->onDelete('cascade');

            $table->integer('incident_id')->unsigned();
            $table->foreign('incident_id')->references('id')->on('incidents')->onDelete('cascade');

            $table->string('description');

            $table->integer('priority_id')->unsigned();
            $table->foreign('priority_id')->references('id')->on('priorities')->onDelete('cascade');

            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            $table->string('document');
            $table->integer('status');
            $table->string('date');
            $table->string('time');
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
        Schema::dropIfExists('reports');
    }
}
