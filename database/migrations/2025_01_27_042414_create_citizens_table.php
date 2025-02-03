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
        Schema::disableForeignKeyConstraints();

        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certificate_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('tracking_number')->unique();
            $table->string('name_bn')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->string('nid')->nullable();
            $table->string('birth_id')->nullable();
            $table->string('passport_no')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('father_name_bn')->nullable();
            $table->string('mother_name_bn')->nullable();
            $table->string('occupation')->nullable();
            $table->string('resident')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('husband_name_en')->nullable();
            $table->string('husband_name_bn')->nullable();
            $table->string('wife_name_en')->nullable();
            $table->string('wife_name_bn')->nullable();
            $table->string('permanent_holding_no')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('moholla_id')->nullable();
            $table->string('permanent_rbs_bn')->nullable();
            $table->string('permanent_district_id')->nullable();
            $table->string('permanent_upazila_id')->nullable();
            $table->string('permanent_postoffice_id')->nullable();
            $table->integer('male')->nullable();
            $table->integer('female')->nullable();
            $table->integer('child')->nullable();
            $table->integer('handicap')->nullable();
            $table->integer('member_of_earning')->nullable();
            $table->integer('number_of_dependents_family')->nullable();
            $table->integer('ssc_job_holder')->nullable();
            $table->integer('hsc_job_holder')->nullable();
            $table->string('land_owner')->nullable();
            $table->string('income_source')->nullable();
            $table->string('yearly_income')->nullable();
            $table->string('nolkup')->nullable();
            $table->string('expanse_sector')->nullable();
            $table->integer('remittance_senders')->nullable();
            $table->string('sanitation')->nullable();
            $table->string('electronics_instrument')->nullable();
            $table->string('social_security')->nullable();
            $table->string('security_program')->nullable();
            $table->integer('multi_building_house')->nullable();
            $table->integer('ripe_house')->nullable();
            $table->integer('semi_ripe_house')->nullable();
            $table->integer('tin_shed_house')->nullable();
            $table->integer('raw_house')->nullable();
            $table->integer('probable_rate')->nullable();
            $table->float('halson_percentage')->nullable();
            $table->float('halson_tax')->nullable();
            $table->string('status')->default('new');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizens');
    }
};
