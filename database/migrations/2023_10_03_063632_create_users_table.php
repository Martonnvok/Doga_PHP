<?php

use App\Models\Users;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table-> String('name');
            $table-> String('email');
            $table-> String('sex');
            $table->timestamps();
        });

        Users::create([ 
            'name' =>'Evelin', 
            'email' => 'evelin@gmail.com',  
            'sex' =>'girl' 

        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
