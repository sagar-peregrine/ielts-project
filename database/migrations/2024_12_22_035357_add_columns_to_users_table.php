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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('official_email')->nullable();
            $table->string('youtube_url')->nullable();
        });
    }


};
