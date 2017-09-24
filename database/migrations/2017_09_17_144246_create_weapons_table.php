<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->enum('type', ['bayonet','bowie','butterfly','falchion','flip','gut','huntsman','karambit','m9','shadowdaggers','ak47','m4a1s','m4a4','awp']);
            $table->enum('quality', ['Contraband', 'Covert', 'Classified', 'Restricted', 'Mil-Spec', 'Industrial' , 'Consumer', 'Vanilla'])->nullable();
            $table->integer('elo')->default('1200');
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
        Schema::dropIfExists('weapons');
    }
}
