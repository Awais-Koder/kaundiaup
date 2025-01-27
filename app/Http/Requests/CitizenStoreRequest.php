<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitizenStoreRequest extends FormRequest
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
            'name_bn' => ['required'],
            'gender' => ['required'],
            'permanent_holding_no' => ['required'],
            'ward_no' => ['required'],
            'moholla_id' => ['required'],
            'permanent_district_id' => ['required'],
            'permanent_upazila_id' => ['required'],
            'permanent_postoffice_id' => ['required'],
            'male' => ['required'],
            'female' => ['required'],
        ];
    }
}
