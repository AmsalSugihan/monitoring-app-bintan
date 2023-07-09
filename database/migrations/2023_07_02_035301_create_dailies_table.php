<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dailies', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('suhu_pagi');
            $table->string('suhu_sore');
            $table->bigInteger('petugas_id')->unsigned()->index()->nullable();
            $table->string('status');
            $table->text('keterangan');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('dailies');
    }
};