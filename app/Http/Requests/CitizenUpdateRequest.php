<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitizenUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'certificate_id' => ['required', 'integer', 'exists:certificates,id'],
            'name_bn' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'nid' => ['required', 'string'],
            'birth_id' => ['required', 'string'],
            'passport_no' => ['required', 'string'],
            'birth_date' => ['required', 'date'],
            'father_name_bn' => ['required', 'string'],
            'mother_name_bn' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'resident' => ['required', 'string'],
            'educational_qualification' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'marital_status' => ['required', 'string'],
            'husband_name_en' => ['required', 'string'],
            'husband_name_bn' => ['required', 'string'],
            'wife_name_en' => ['required', 'string'],
            'wife_name_bn' => ['required', 'string'],
            'permanent_holding_no' => ['required', 'string'],
            'ward_no' => ['required', 'string'],
            'moholla_id' => ['required', 'string'],
            'permanent_rbs_bn' => ['required', 'string'],
            'permanent_district_id' => ['required', 'string'],
            'permanent_upazila_id' => ['required', 'string'],
            'permanent_postoffice_id' => ['required', 'string'],
            'male' => ['required', 'integer'],
            'female' => ['required', 'integer'],
            'child' => ['required', 'integer'],
            'handicap' => ['required', 'integer'],
            'member_of_earning' => ['required', 'integer'],
            'number_of_dependents_family' => ['required', 'integer'],
            'ssc_job_holder' => ['required', 'integer'],
            'hsc_job_holder' => ['required', 'integer'],
            'land_owner' => ['required', 'string'],
            'income_source' => ['required', 'string'],
            'yearly_income' => ['required', 'string'],
            'nolkup' => ['required', 'string'],
            'expanse_sector' => ['required', 'string'],
            'remittance_senders' => ['required', 'integer'],
            'sanitation' => ['required', 'string'],
            'electronics_instrument' => ['required', 'string'],
            'social_security' => ['required', 'string'],
            'security_program' => ['required', 'string'],
            'multi_building_house' => ['required', 'integer'],
            'ripe_house' => ['required', 'integer'],
            'semi_ripe_house' => ['required', 'integer'],
            'tin_shed_house' => ['required', 'integer'],
            'raw_house' => ['required', 'integer'],
            'probable_rate' => ['required', 'integer'],
            'halson_percentage' => ['required', 'numeric'],
            'halson_tax' => ['required', 'numeric'],
            'applying_for' => ['required', 'integer'],
        ];
    }
}
