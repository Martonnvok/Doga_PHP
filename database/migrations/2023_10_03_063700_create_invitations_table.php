<?php

use App\Models\Invitation;
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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id('invitation_id');
            $table->boolean('appeared')->default(0);
            $table->integer('user_id');
            $table->integer('event_id');
            $table->timestamps();
        });

        Invitation::create([ 
            'appeared' => true ,
            'user_id' => 1,
            'event_id' => 1

        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
