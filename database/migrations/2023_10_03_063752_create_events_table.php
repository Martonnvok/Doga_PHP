<?php

use App\Models\Events;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->String('location');
            $table->integer('org_id');
            $table->timestamps();
        });

        Events::create([ 
            'date' => '2000-01-01' ,
            'location' => "Budapest",
            'org_id' => 1

        ]); 

        Events::create([ 
            'date' => '2000-01-02' ,
            'location' => "Győr",
            'org_id' => 2

        ]); 

        Events::create([ 
            'date' => '2000-01-03' ,
            'location' => "Somogyvár",
            'org_id' => 3

        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
