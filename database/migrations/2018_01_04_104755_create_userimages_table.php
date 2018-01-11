<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserimagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('userimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagename');
            $table->string('slidertitle');
            $table->string('sliderdescription');
            $table->string('sliderimageorder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('userimages');
    }

}
