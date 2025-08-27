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
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filter_type');
            $table->date('generated_date');
            $table->string('content_summary');
            $table->string('generated_by');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('output_format');
            $table->string('report_title');
            $table->string('archived');
            $table->string('total_records');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
