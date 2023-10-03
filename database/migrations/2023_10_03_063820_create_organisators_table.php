<?php

use App\Models\Organisators;
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
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->string('name');
            $table->integer('description');
            $table->timestamps();
        });

        Organisators::create()([ 
            'name' =>'Evelin', 
            'description' => 1,

        ]); 

        Organisators::create()([ 
            'name' =>'Kati', 
            'description' => 2,

        ]); 

        Organisators::create()([ 
            'name' =>'Józsi', 
            'description' => 3,

        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
