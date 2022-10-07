<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Leads', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("id_lead");
            $table->bigInteger("price");
            $table->integer("responsible_user_id");
            $table->integer("group_id");
            $table->integer("status_id");
            $table->integer("pipeline_id");
            $table->integer("loss_reason_id")->nullable();
            $table->integer("source_id")->nullable();
            $table->integer("created_by")->nullable();
            $table->integer("updated_by")->nullable();
            $table->integer("lead_created_at")->nullable();
            $table->integer("lead_updated_at")->nullable();
            $table->timestamp("closed_at")->nullable();
            $table->timestamp("closeat_task_at")->nullable();
            $table->boolean("is_deleted");
            $table->integer("custom_fields_values")->nullable();
            $table->integer("score")->nullable();
            $table->integer("account_id");
            $table->string("company_name")->nullable();
            $table->integer("company_responsible_user_id")->nullable();
            $table->integer("company_group_id")->nullable();
            $table->integer("company_created_by")->nullable();
            $table->integer("company_updated_by")->nullable();
            $table->integer("company_created_at")->nullable();
            $table->integer("company_updated_at")->nullable();
            $table->integer("company_closeat_task_at")->nullable();
            $table->integer("company_custom_fields_values")->nullable();
            $table->integer("company_account_id")->nullable();
            $table->integer("company_id")->nullable();
            $table->timestamp("updated_at");
            $table->timestamp("created_at");
            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Leads');
    }
};
