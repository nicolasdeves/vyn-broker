<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('number');
            $table->string('complement');

            $table
                ->foreignId('property_type_id') // column
                ->constrained('property_type') // table
                ->onDelete('cascade');

            $table
                ->foreignId('property_deal_id') // column
                ->constrained('property_deal') // table
                ->onDelete('cascade');

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
        Schema::dropIfExists('property');
    }
}
