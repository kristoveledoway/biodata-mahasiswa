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
        Schema::create("biodata_mahasiswa", function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama");
            $table->string("jk");
            $table->date("tgl_lahir");
            $table->integer("umur");
            $table->string("alamat");
            $table->string("nohp");
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
