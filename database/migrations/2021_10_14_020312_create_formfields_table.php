<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('formfields', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('label', 200);
            $table->string('code', 20);
            $table->boolean('mandatory');
            $table->boolean('enabled');
            $table->string('validate', 1000);
            $table->integer('order');
            $table->foreignId('formgroup_id')->constrained();
            $table->foreignId('formfieldtype_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formfields');
    }
}
