<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormfieldtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('formfieldtypes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            $table->string('name', 200);
            $table->timestamps();
        });

        DB::table('formfieldtypes')->insert([
            'code' => 'text',
            'name' => 'Text',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'select',
            'name' => 'Select',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'image',
            'name' => 'Image',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'checkbox',
            'name' => 'Checkbox',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'radio',
            'name' => 'Radio',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'date',
            'name' => 'Date',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'patente',
            'name' => 'Patente',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'number',
            'name' => 'Number',
        ]);
        DB::table('formfieldtypes')->insert([
            'code' => 'url',
            'name' => 'Url',
        ]);

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formfieldtypes');
    }
}
