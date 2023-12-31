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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profile_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->integer('mobile')->nullable();;
            $table->string('linkedin')->nullable();;
            $table->decimal('ctc', 10, 2)->nullable();;
            $table->boolean('open_to_work')->nullable();;
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
