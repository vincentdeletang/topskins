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
            $table->enum('type', ['bayonet','bowie','butterfly','falchion','flip','gut','huntsman','karambit','m9','shadowdaggers',
            'ak47','m4a1s','m4a4','awp','aug','famas','g3sg1','galil','scar20','sg553','ssg08',
            'cz75','deagle','dual','fiveseven','glock','p2000','p250','r8','tec9','usps',
            'mac10','mp7','mp9','ppbizon','p90','ump45',
            'mag7','nova','sawedoff','xm1014','m249','negev',
            'bloodhound', 'driver', 'wraps', 'moto', 'specialist', 'sport'
            ]);
            $table->enum('category', ['pistol', 'rifle', 'smg', 'heavy', 'knife', 'gloves']);
            $table->enum('quality', ['Contraband', 'Extraordinary' , 'Covert', 'Classified', 'Restricted', 'Mil-Spec', 'Industrial' , 'Consumer', 'Vanilla'])->nullable();
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
