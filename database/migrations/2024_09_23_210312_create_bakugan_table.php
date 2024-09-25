<?php

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
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
        Schema::create('bakugan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('attribute', array_column(BakuganAttribute::cases(), 'value'));
            $table->enum('season', array_column(BakuganSeason::cases(), 'value'));
            $table->unique(['name', 'attribute']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakugan');
    }
};
