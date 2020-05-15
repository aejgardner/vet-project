<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 255);
            $table->string("type", 255);
            $table->float("weight", 6, 2);
            $table->integer("height");
            $table->enum('biteyness', ['1', '2', '3', '4', '5']);

            // create the owner_id column
            $table->foreignId("owner_id")->unsigned();
            // set up the foreign key constraint
            // this tells MySQL that the owner_id column
            // references the id column on the articles table
            // we also want MySQL to automatically remove any
            // comments linked to articles that are deleted
            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
