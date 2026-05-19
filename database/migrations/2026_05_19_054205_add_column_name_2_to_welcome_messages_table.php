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
        Schema::table('welcome_messages', function (Blueprint $table) {
            $table->string('name_2')->nullable()->after('description');
            $table->string('title_2')->nullable()->after('name_2');
            $table->string('image_2')->nullable()->after('title_2');
            $table->text('description_2')->nullable()->after('image_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('welcome_messages', function (Blueprint $table) {
            $table->dropColumn(['name_2', 'title_2', 'image_2', 'description_2']);
        });
    }
};
