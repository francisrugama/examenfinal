<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_type');
            $table->string('tool_used');
            $table->string('warranty_service');
            $table->string('observations');

            $table->integer('technican_id')->unsigned();
            $table->foreign('technican_id')->references('id')->on('technicans')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('maintenance_record_id')->unsigned();
            $table->foreign('maintenance_record_id')->references('id')->on('maintenance_records')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};

