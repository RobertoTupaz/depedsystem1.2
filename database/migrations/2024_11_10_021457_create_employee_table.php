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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->longText("stats")->nullable();
            $table->longText("page")->nullable();
            $table->longText("page_no")->nullable();
            $table->longText("organizational_unit")->nullable();
            $table->longText("salary_grade")->nullable();
            $table->double("authorized_anual_salary", 10, 2)->nullable();
            $table->double("actual_anual_salary", 10, 2)->nullable();
            $table->integer("step")->nullable();
            $table->integer("area_code")->nullable();
            $table->longText("area_type")->nullable();
            $table->longText("level")->nullable();
            $table->longText("position_title")->nullable();
            $table->longText("count")->nullable();
            $table->longText("item_number")->nullable();
            $table->longText("last_name")->nullable();
            $table->longText("first_name")->nullable();
            $table->longText("middle_name")->nullable();
            $table->longText("sex")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->longText("tin")->nullable();
            $table->date("date_of_original_appointment")->nullable();
            $table->date("date_of_last_promotion_or_appointment")->nullable();
            $table->longText("status")->nullable();
            $table->longText("civil_service_eligibility")->nullable();
            $table->integer("emp")->nullable();
            $table->longText("salary_grade2")->nullable();
            $table->integer("step2")->nullable();
            $table->double("actual_anual_salary2", 10, 2)->nullable();
            $table->longText("full_name")->nullable();
            $table->longText("vice")->nullable();
            $table->longText("department")->nullable();
            $table->longText("item_number2")->nullable();
            $table->longText("reclass_item")->nullable();
            $table->longText("item_number3")->nullable();
            $table->longText("category_region")->nullable();
            $table->longText("school")->nullable();
            $table->longText("district")->nullable();
            $table->longText("old_item")->nullable();
            $table->longText("ct_item")->nullable();
            $table->longText("assignment")->nullable();
            $table->longText("department2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
