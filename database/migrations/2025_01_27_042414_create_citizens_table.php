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
            $table->foreignId('certificate_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate(); //done
            $table->integer('tracking_number')->unique();
            $table->string('name_bn')->nullable(); //done
            $table->string('name_en')->nullable(); //done
            $table->string('image')->nullable(); //done
            $table->string('nid')->nullable(); // done
            $table->string('birth_id')->nullable(); //done
            $table->string('passport_no')->nullable(); //done
            $table->date('birth_date')->nullable(); //done
            $table->string('father_name_bn')->nullable();//done
            $table->string('father_name_en')->nullable(); //done
            $table->string('mother_name_bn')->nullable();//done
            $table->string('mother_name_en')->nullable();//done
            $table->string('occupation')->nullable();//done
            $table->string('resident')->nullable(); //done
            $table->string('educational_qualification')->nullable(); //done
            $table->string('religion')->nullable(); //done
            $table->string('gender')->nullable(); //done
            $table->string('marital_status')->nullable(); //done
            $table->string('husband_name_en')->nullable(); //done
            $table->string('husband_name_bn')->nullable(); //done
            $table->string('wife_name_en')->nullable(); //done
            $table->string('wife_name_bn')->nullable(); //done
            $table->string('permanent_holding_no')->nullable(); //done
            $table->string('p_gram')->nullable(); //done
            $table->string('pb_gram')->nullable(); //done
            $table->string('p_rbs')->nullable(); //done
            $table->string('pb_rbs')->nullable(); //done
            $table->string('p_wordno')->nullable(); //done
            $table->string('pb_wordno')->nullable(); //done
            $table->string('p_dis')->nullable(); //done
            $table->string('pb_dis')->nullable(); //done
            $table->string('p_upozila')->nullable(); //done
            $table->string('pb_upozila')->nullable(); //done
            $table->string('p_postof')->nullable(); //done
            $table->string('pb_postof')->nullable(); //done
            $table->string('per_gram')->nullable(); //done
            $table->string('perb_gram')->nullable(); //done
            $table->string('per_rbs')->nullable(); //done
            $table->string('perb_rbs')->nullable(); //done
            $table->string('per_wordno')->nullable(); //done
            $table->string('perb_wordno')->nullable(); //done
            $table->string('per_dis')->nullable(); //done
            $table->string('perb_dis')->nullable(); //done
            $table->string('per_upozila')->nullable(); //done
            $table->string('perb_upozila')->nullable(); //done
            $table->string('per_postof')->nullable(); //done
            $table->string('perb_postof')->nullable(); //done
            $table->string('mobile')->nullable(); //done
            $table->string('email')->nullable(); //done
            $table->string('status')->default('new'); //done
            $table->text('attachment')->nullable(); //done
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
