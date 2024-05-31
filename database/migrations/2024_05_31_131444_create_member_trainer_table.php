<?php

use App\Models\Member;
use App\Models\Trainer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member_trainer', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Member::class,)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Trainer::class,)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_trainer');
    }
};
