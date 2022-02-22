<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('formgroups', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->index();
            $table->string('name', 200);
            $table->string('label', 200);
            $table->integer('order');
            $table->foreignId('formsection_id')->constrained();
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
        Schema::dropIfExists('formgroups');
    }
}
