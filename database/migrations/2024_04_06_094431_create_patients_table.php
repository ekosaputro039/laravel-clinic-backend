<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            //nik
            $table->string('nik');
            //kk
            $table->string('kk');
            //name
            $table->string('name');
            //phone
            $table->string('phone');
            //email
            $table->string('email')->nullable();
            //gender
            $table->string('gender');
            //birth place
            $table->string('birth_place');
            //birth date
            $table->string('birth_date');
            //is deceased
            $table->boolean('is_deceased')->default(false);
            //dress line
            $table->text('address_line');
            //city
            $table->string('city');
            //city code
            $table->string('city_code');
            //provice
            $table->string('province');
            //province code
            $table->string('province_code');
            //district
            $table->string('district');
            //district code
            $table->string('district_code');
            //village
            $table->string('village');
            //village code
            $table->string('village_code');
            //rt
            $table->string('rt');
            //rw
            $table->string('rw');
            //postal code
            $table->string('postal_code');
            //marital status
            $table->string('marital_status');
            //relationship name
            $table->string('relationship_name')->nullable();
            //relationship phone
            $table->string('relationship_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
