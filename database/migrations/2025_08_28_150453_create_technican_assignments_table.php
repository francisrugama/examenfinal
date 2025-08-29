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
        Schema::create('technican_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('assignment_date');
            $table->string('task_status');
            $table->string('performance_rating');
            $table->string('tools_used');
            $table->string('task_type');

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
        Schema::dropIfExists('technican_assignments');
    }
};
