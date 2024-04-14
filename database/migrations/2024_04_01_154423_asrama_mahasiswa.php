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
        Schema::create("asrama_mahasiswa", function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama_asrama");
            $table->string("alamat");
            $table->string("no_kamar");
            $table->timestamps("");
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
