<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Certificate;
use App\Models\Citizen;

class CitizenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'certificate_id' => Certificate::factory(),
            // 'certificate_id' => 4,
            'name_bn' => fake()->word(),
            'tracking_number' => fake()->numberBetween(000000 , 999999),
            'image' => 'https://www.kaundiaup.com/img/default/profile.png',
            'mobile' => fake()->word(),
            'nid' => fake()->word(),
            'birth_id' => fake()->word(),
            'passport_no' => fake()->word(),
            'birth_date' => fake()->date(),
            'father_name_bn' => fake()->word(),
            'mother_name_bn' => fake()->word(),
            'occupation' => fake()->word(),
            'resident' => fake()->word(),
            'educational_qualification' => fake()->word(),
            'religion' => fake()->word(),
            'gender' => fake()->word(),
            'marital_status' => fake()->word(),
            'husband_name_en' => fake()->word(),
            'husband_name_bn' => fake()->word(),
            'wife_name_en' => fake()->word(),
            'wife_name_bn' => fake()->word(),
            'permanent_holding_no' => fake()->word(),
            'ward_no' => fake()->word(),
            'moholla_id' => fake()->word(),
            'permanent_rbs_bn' => fake()->word(),
            'permanent_district_id' => fake()->word(),
            'permanent_upazila_id' => fake()->word(),
            'permanent_postoffice_id' => fake()->word(),
            'male' => fake()->numberBetween(-10000, 10000),
            'female' => fake()->numberBetween(-10000, 10000),
            'child' => fake()->numberBetween(-10000, 10000),
            'handicap' => fake()->numberBetween(-10000, 10000),
            'member_of_earning' => fake()->numberBetween(-10000, 10000),
            'number_of_dependents_family' => fake()->numberBetween(-10000, 10000),
            'ssc_job_holder' => fake()->numberBetween(-10000, 10000),
            'hsc_job_holder' => fake()->numberBetween(-10000, 10000),
            'land_owner' => fake()->word(),
            'income_source' => fake()->word(),
            'yearly_income' => fake()->word(),
            'nolkup' => fake()->word(),
            'expanse_sector' => fake()->word(),
            'remittance_senders' => fake()->numberBetween(-10000, 10000),
            'sanitation' => fake()->word(),
            'electronics_instrument' => fake()->word(),
            'social_security' => fake()->word(),
            'security_program' => fake()->word(),
            'multi_building_house' => fake()->numberBetween(-10000, 10000),
            'ripe_house' => fake()->numberBetween(-10000, 10000),
            'semi_ripe_house' => fake()->numberBetween(-10000, 10000),
            'tin_shed_house' => fake()->numberBetween(-10000, 10000),
            'raw_house' => fake()->numberBetween(-10000, 10000),
            'probable_rate' => fake()->numberBetween(-10000, 10000),
            'halson_percentage' => fake()->randomFloat(0, 0, 9999999999.),
            'halson_tax' => fake()->randomFloat(0, 0, 9999999999.),
            'status' =>'new',
        ];
    }
}
