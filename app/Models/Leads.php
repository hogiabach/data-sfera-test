<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Leads extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_lead",
        "name",
        "price",
        "responsible_user_id",
        "group_id",
        "status_id",
        "pipeline_id",
        "loss_reason_id",
        "source_id",
        "created_by",
        "updated_by",
        "lead_created_at",
        "lead_updated_at",
        "closed_at",
        "closeat_task_at",
        "is_deleted",
        "custom_fields_values",
        "score",
        "account_id",
        "company_name",
        "company_responsible_user_id",
        "company_group_id",
        "company_created_by",
        "company_updated_by",
        "company_created_at",
        "company_updated_at",
        "company_closeat_task_at",
        "company_custom_fields_values",
        "company_account_id",
        "company_id",
        "updated_at",
        "created_at",
    ];
    public function update_record($api_data)
    {
        $this::where("id_lead", $api_data->id)
            ->update([
                "name" => $api_data->name,
                "price" => $api_data->price,
                "responsible_user_id" => $api_data->responsible_user_id,
                "group_id" => $api_data->group_id,
                "status_id" => $api_data->status_id,
                "pipeline_id" => $api_data->pipeline_id,
                "loss_reason_id" => $api_data->loss_reason_id,
                "source_id" => $api_data->source_id,
                "created_by" => $api_data->created_by,
                "updated_by" => $api_data->updated_by,
                "lead_created_at" => $api_data->created_at,
                "lead_updated_at" => $api_data->updated_at,
                "closed_at" => $api_data->closed_at,
                "closeat_task_at" => $api_data->closeat_task_at,
                "is_deleted" => $api_data->is_deleted,
                "custom_fields_values" => $api_data->custom_fields_values,
                "score" => $api_data->score,
                "account_id" => $api_data->account_id,
                "company_name" => $api_data->company->name,
                "company_responsible_user_id" => $api_data->company->responsible_user_id,
                "company_group_id" => $api_data->company->group_id,
                "company_created_by" => $api_data->company->created_by,
                "company_updated_by" => $api_data->company->updated_by,
                "company_created_at" => $api_data->company->created_at,
                "company_updated_at" => $api_data->company->updated_at,
                "company_closeat_task_at" => $api_data->company->closeat_task_at,
                "company_custom_fields_values" => $api_data->company_custom_fields_values,
                "company_account_id" => $api_data->company->account_id,
                "company_id" => $api_data->company->id
            ]);
    }

    public function insert_record($api_data)
    {
        $this::create([
            "id_lead" => $api_data->id,
            "name" => $api_data->name,
            "price" => $api_data->price,
            "responsible_user_id" => $api_data->responsible_user_id,
            "group_id" => $api_data->group_id,
            "status_id" => $api_data->status_id,
            "pipeline_id" => $api_data->pipeline_id,
            "loss_reason_id" => $api_data->loss_reason_id,
            "source_id" => $api_data->source_id,
            "created_by" => $api_data->created_by,
            "updated_by" => $api_data->updated_by,
            "lead_created_at" => $api_data->created_at,
            "lead_updated_at" => $api_data->updated_at,
            "closed_at" => $api_data->closed_at,
            "closeat_task_at" => $api_data->closeat_task_at,
            "is_deleted" => $api_data->is_deleted,
            "custom_fields_values" => $api_data->custom_fields_values,
            "score" => $api_data->score,
            "account_id" => $api_data->account_id,
            "company_name" => $api_data->company->name,
            "company_responsible_user_id" => $api_data->company->responsible_user_id,
            "company_group_id" => $api_data->company->group_id,
            "company_created_by" => $api_data->company->created_by,
            "company_updated_by" => $api_data->company->updated_by,
            "company_created_at" => $api_data->company->created_at,
            "company_updated_at" => $api_data->company->updated_at,
            "company_closeat_task_at" => $api_data->company->closeat_task_at,
            "company_custom_fields_values" => $api_data->company_custom_fields_values,
            "company_account_id" => $api_data->company->account_id,
            "company_id" => $api_data->company->id
        ]);
    }
    //config model
    protected $table = "Leads";
    protected $primaryKey = "id_lead";
}
