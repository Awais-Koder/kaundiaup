<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Citizen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'certificate_id',
        'name_bn',
        'mobile',
        'nid',
        'birth_id',
        'passport_no',
        'birth_date',
        'father_name_bn',
        'mother_name_bn',
        'occupation',
        'resident',
        'educational_qualification',
        'religion',
        'gender',
        'marital_status',
        'husband_name_en',
        'husband_name_bn',
        'wife_name_en',
        'wife_name_bn',
        'permanent_holding_no',
        'ward_no',
        'moholla_id',
        'permanent_rbs_bn',
        'permanent_district_id',
        'permanent_upazila_id',
        'permanent_postoffice_id',
        'male',
        'female',
        'child',
        'handicap',
        'member_of_earning',
        'number_of_dependents_family',
        'ssc_job_holder',
        'hsc_job_holder',
        'land_owner',
        'income_source',
        'yearly_income',
        'nolkup',
        'expanse_sector',
        'remittance_senders',
        'sanitation',
        'electronics_instrument',
        'social_security',
        'security_program',
        'multi_building_house',
        'ripe_house',
        'semi_ripe_house',
        'tin_shed_house',
        'raw_house',
        'probable_rate',
        'halson_percentage',
        'halson_tax',
        'applying_for',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function certificate(): BelongsTo
    {
        return $this->belongsTo(Certificate::class);
    }
}
