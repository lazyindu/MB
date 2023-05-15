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
        Schema::create('batting__records', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->float("winner")->default(0); //0 for no result 1 loose 2 winner
            $table->string("bat");
            $table->string("amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batting__records');
    }
};
