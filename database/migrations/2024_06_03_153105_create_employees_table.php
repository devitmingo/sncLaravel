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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('name',70);
            $table->string('fatherName',70);
            $table->string('motherName',70);
            $table->enum('gender',["M","F","O"]);
            $table->string('mobile',10)->unique();
            $table->string('email',70);
            $table->date('dob')->nullable();
            $table->string('desiganation')->nullable();
            $table->string('image')->nullable();
            $table->string('address',70);
            $table->string('status')->default(1)->commitment('1:Enable,0:disable');
            $table->tinyInteger('createdby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
