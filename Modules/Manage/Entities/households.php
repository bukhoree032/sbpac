<?php

namespace Modules\Manage\Entities;

use Illuminate\Database\Eloquent\Model;

class Households extends Model
{
    protected $table = 'households';

    protected $fillable = [
        'id',
        'addr_house_code',
        'addr_house_number',
        'addr_moo',
        'addr_district_id',
        'addr_amphure_id',
        'addr_province_id',
        'addr_zip_code',
        'addr_phone_number',
        'member_name',
        'member_sex',
        'member_hhold_relations',
        'member_id_card',
        'member_datofbirth',
        'member_highest_edu',
        'member_occupation',
        'member_income',
        'member_benefit_rights_received',
        'pcond_health_dimension',
        'pcond_edu_dimension',
        'pcond_edu_dimension_1',
        'pcond_edu_dimension_2',
        'pcond_edu_dimension_3',
        'pcond_gov_dimensions_serv',
        'hhold_problems_liv_dimension',
        'hhold_problems_other',
        'hfagency_health_plan',
        'hfagency_health_budget',
        'hfagency_health_support',
        'hfagency_edu_plan',
        'hfagency_edu_budget',
        'hfagency_edu_support',
        'hfagency_gov_serv_plan',
        'hfagency_gov_serv_budget',
        'hfagency_gov_serv_support',
        'hfagency_income_plan',
        'hfagency_income_budget',
        'hfagency_income_support',
        'hfagency_being_plan',
        'hfagency_being_budget',
        'hfagency_being_support',
        'rs_agencies_health_perform',
        'rs_agencies_health_budget',
        'rs_agencies_health_support',
        'rs_agencies_edu_perform',
        'rs_agencies_edu_budget',
        'rs_agencies_edu_support',
        'rs_agencies_gov_serv_perform	',
        'rs_agencies_gov_serv_budget',
        'rs_agencies_gov_serv_support',
        'rs_agencies_income_perform',
        'rs_agencies_income_budget',
        'rs_agencies_income_support',
        'rs_agencies_being_perform',
        'rs_agencies_being_budget',
        'rs_agencies_being_support'
    ];
}