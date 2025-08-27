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
        Schema::create('spares_useds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('part_code')->unique();
            $table->string('brand');
            $table->string('warranty_period');
            $table->string('supplier_name');

            $table->integer('maintenance_record_id')->unsigned();
            $table->foreign('maintenance_record_id')->references('id')->on('maintenances_record')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spares_useds');
    }
};
