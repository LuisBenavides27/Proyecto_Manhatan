<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negociacions', function (Blueprint $table) {
            $table->id();
            $table->string('documento1');
            $table->string('documento2');
            $table->string('documento3');
            $table->string('documento4');
            $table->string('documento5');
            $table->foreignId('contrato_id')->constrained('contratos')->onDelete('set null');
            $table->foreignId('user_id')->constrained('users')->onDelete('set null'); // Asumiendo que la tabla de usuarios es 'users'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negociacions');
    }
};
