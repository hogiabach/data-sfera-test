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
            $table->integer("id_lead");
            $table->integer("price");
            $table->integer("responsible_user_id");
            $table->integer("group_id");
            $table->integer("status_id");
            $table->integer("pipeline_id");
            $table->integer("loss_reason_id");
            $table->integer("source_id");
            $table->integer("created_by");
            $table->integer("updated_by");
            $table->integer("created_at");
            $table->integer("updated_at");
            $table->integer("closed_at")->nullable();
            $table->integer("closeat_task_at")->nullable();
            $table->boolean("is_deleted");
            $table->integer("custom_fields_values");
            $table->integer("score");
            $table->integer("account_id");
            $table->string("company");
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
