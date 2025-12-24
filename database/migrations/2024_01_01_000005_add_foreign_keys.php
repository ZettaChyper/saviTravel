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
        Schema::table('packages', function (Blueprint $table) {
            $table->foreign('destination_id')
                ->references('id')
                ->on('destinations')
                ->onDelete('set null');
        });

        Schema::table('inquiries', function (Blueprint $table) {
            $table->foreign('package_id')
                ->references('id')
                ->on('packages')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropForeign(['destination_id']);
        });

        Schema::table('inquiries', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
        });
    }
};


