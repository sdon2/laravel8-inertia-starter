<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAuditLogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('log_name')->nullable();
            $table->string('description');
            $table->integer('subject_id')->nullable();
            $table->string('subject_type')->nullable();
            $table->integer('causer_id')->nullable();
            $table->string('causer_type')->nullable();
            $table->text('properties')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->index('log_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('audit_logs');
    }
}
