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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->integer('nim');
            $table->string('major',127);
            $table->string('position',255)->default('Anggota Research');
            $table->string('linked',255);
            $table->string('github',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('email',255);
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
