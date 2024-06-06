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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('category',70);
            $table->string('slag',70);
            $table->string('keyword',70);
            $table->string('description');
            $table->text('content');
            $table->string('subject');
            $table->integer('created_By');
            $table->integer('status',)->commitment('0:live,1:draft,2:cancel')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
