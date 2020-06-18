<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('professor_id')->nullable();
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->timestamps();
        });

        Schema::table('professors', function (Blueprint $table) {
            $table->unsignedBigInteger('gradebook_id')->nullable();
            $table->foreign('gradebook_id')->references('id')->on('gradebooks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradebooks');
    }
}
