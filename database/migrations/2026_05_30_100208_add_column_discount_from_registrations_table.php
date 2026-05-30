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
        Schema::table('registrations', function (Blueprint $table) {
            $table->unsignedBigInteger('discount_early')->nullable()->after('early_bird_reg');
            $table->unsignedBigInteger('discount_normal')->nullable()->after('normal_reg');
            $table->unsignedBigInteger('discount_onsite')->nullable()->after('onsite_reg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['discount_early', 'discount_normal', 'discount_onsite']);
        });
    }
};
