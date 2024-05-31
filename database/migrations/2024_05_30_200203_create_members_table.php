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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('age');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('exercise_type');
            $table->string('weight');
            $table->string('height');
            $table->date('start_date');
            $table->date('expire_date');
            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
