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
            $table->string('url_earlybird')->nullable()->after('description');
            $table->string('url_regular')->nullable()->after('url_earlybird');
            $table->string('url_onsite')->nullable()->after('url_regular');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['url_earlybird', 'url_regular', 'url_onsite']);
        });
    }
};
