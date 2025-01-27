<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Certificate;
use App\Models\Citizen;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CitizenController
 */
final class CitizenControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $citizens = Citizen::factory()->count(3)->create();

        $response = $this->get(route('citizens.index'));

        $response->assertOk();
        $response->assertViewIs('citizen.index');
        $response->assertViewHas('citizens');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('citizens.create'));

        $response->assertOk();
        $response->assertViewIs('citizen.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CitizenController::class,
            'store',
            \App\Http\Requests\CitizenStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $certificate = Certificate::factory()->create();
        $name_bn = fake()->word();
        $mobile = fake()->word();
        $nid = fake()->word();
        $birth_id = fake()->word();
        $passport_no = fake()->word();
        $birth_date = Carbon::parse(fake()->date());
        $father_name_bn = fake()->word();
        $mother_name_bn = fake()->word();
        $occupation = fake()->word();
        $resident = fake()->word();
        $educational_qualification = fake()->word();
        $religion = fake()->word();
        $gender = fake()->word();
        $marital_status = fake()->word();
        $husband_name_en = fake()->word();
        $husband_name_bn = fake()->word();
        $wife_name_en = fake()->word();
        $wife_name_bn = fake()->word();
        $permanent_holding_no = fake()->word();
        $ward_no = fake()->word();
        $moholla_id = fake()->word();
        $permanent_rbs_bn = fake()->word();
        $permanent_district_id = fake()->word();
        $permanent_upazila_id = fake()->word();
        $permanent_postoffice_id = fake()->word();
        $male = fake()->numberBetween(-10000, 10000);
        $female = fake()->numberBetween(-10000, 10000);
        $child = fake()->numberBetween(-10000, 10000);
        $handicap = fake()->numberBetween(-10000, 10000);
        $member_of_earning = fake()->numberBetween(-10000, 10000);
        $number_of_dependents_family = fake()->numberBetween(-10000, 10000);
        $ssc_job_holder = fake()->numberBetween(-10000, 10000);
        $hsc_job_holder = fake()->numberBetween(-10000, 10000);
        $land_owner = fake()->word();
        $income_source = fake()->word();
        $yearly_income = fake()->word();
        $nolkup = fake()->word();
        $expanse_sector = fake()->word();
        $remittance_senders = fake()->numberBetween(-10000, 10000);
        $sanitation = fake()->word();
        $electronics_instrument = fake()->word();
        $social_security = fake()->word();
        $security_program = fake()->word();
        $multi_building_house = fake()->numberBetween(-10000, 10000);
        $ripe_house = fake()->numberBetween(-10000, 10000);
        $semi_ripe_house = fake()->numberBetween(-10000, 10000);
        $tin_shed_house = fake()->numberBetween(-10000, 10000);
        $raw_house = fake()->numberBetween(-10000, 10000);
        $probable_rate = fake()->numberBetween(-10000, 10000);
        $halson_percentage = fake()->randomFloat(/** float_attributes **/);
        $halson_tax = fake()->randomFloat(/** float_attributes **/);
        $applying_for = fake()->numberBetween(-10000, 10000);

        $response = $this->post(route('citizens.store'), [
            'certificate_id' => $certificate->id,
            'name_bn' => $name_bn,
            'mobile' => $mobile,
            'nid' => $nid,
            'birth_id' => $birth_id,
            'passport_no' => $passport_no,
            'birth_date' => $birth_date->toDateString(),
            'father_name_bn' => $father_name_bn,
            'mother_name_bn' => $mother_name_bn,
            'occupation' => $occupation,
            'resident' => $resident,
            'educational_qualification' => $educational_qualification,
            'religion' => $religion,
            'gender' => $gender,
            'marital_status' => $marital_status,
            'husband_name_en' => $husband_name_en,
            'husband_name_bn' => $husband_name_bn,
            'wife_name_en' => $wife_name_en,
            'wife_name_bn' => $wife_name_bn,
            'permanent_holding_no' => $permanent_holding_no,
            'ward_no' => $ward_no,
            'moholla_id' => $moholla_id,
            'permanent_rbs_bn' => $permanent_rbs_bn,
            'permanent_district_id' => $permanent_district_id,
            'permanent_upazila_id' => $permanent_upazila_id,
            'permanent_postoffice_id' => $permanent_postoffice_id,
            'male' => $male,
            'female' => $female,
            'child' => $child,
            'handicap' => $handicap,
            'member_of_earning' => $member_of_earning,
            'number_of_dependents_family' => $number_of_dependents_family,
            'ssc_job_holder' => $ssc_job_holder,
            'hsc_job_holder' => $hsc_job_holder,
            'land_owner' => $land_owner,
            'income_source' => $income_source,
            'yearly_income' => $yearly_income,
            'nolkup' => $nolkup,
            'expanse_sector' => $expanse_sector,
            'remittance_senders' => $remittance_senders,
            'sanitation' => $sanitation,
            'electronics_instrument' => $electronics_instrument,
            'social_security' => $social_security,
            'security_program' => $security_program,
            'multi_building_house' => $multi_building_house,
            'ripe_house' => $ripe_house,
            'semi_ripe_house' => $semi_ripe_house,
            'tin_shed_house' => $tin_shed_house,
            'raw_house' => $raw_house,
            'probable_rate' => $probable_rate,
            'halson_percentage' => $halson_percentage,
            'halson_tax' => $halson_tax,
            'applying_for' => $applying_for,
        ]);

        $citizens = Citizen::query()
            ->where('certificate_id', $certificate->id)
            ->where('name_bn', $name_bn)
            ->where('mobile', $mobile)
            ->where('nid', $nid)
            ->where('birth_id', $birth_id)
            ->where('passport_no', $passport_no)
            ->where('birth_date', $birth_date)
            ->where('father_name_bn', $father_name_bn)
            ->where('mother_name_bn', $mother_name_bn)
            ->where('occupation', $occupation)
            ->where('resident', $resident)
            ->where('educational_qualification', $educational_qualification)
            ->where('religion', $religion)
            ->where('gender', $gender)
            ->where('marital_status', $marital_status)
            ->where('husband_name_en', $husband_name_en)
            ->where('husband_name_bn', $husband_name_bn)
            ->where('wife_name_en', $wife_name_en)
            ->where('wife_name_bn', $wife_name_bn)
            ->where('permanent_holding_no', $permanent_holding_no)
            ->where('ward_no', $ward_no)
            ->where('moholla_id', $moholla_id)
            ->where('permanent_rbs_bn', $permanent_rbs_bn)
            ->where('permanent_district_id', $permanent_district_id)
            ->where('permanent_upazila_id', $permanent_upazila_id)
            ->where('permanent_postoffice_id', $permanent_postoffice_id)
            ->where('male', $male)
            ->where('female', $female)
            ->where('child', $child)
            ->where('handicap', $handicap)
            ->where('member_of_earning', $member_of_earning)
            ->where('number_of_dependents_family', $number_of_dependents_family)
            ->where('ssc_job_holder', $ssc_job_holder)
            ->where('hsc_job_holder', $hsc_job_holder)
            ->where('land_owner', $land_owner)
            ->where('income_source', $income_source)
            ->where('yearly_income', $yearly_income)
            ->where('nolkup', $nolkup)
            ->where('expanse_sector', $expanse_sector)
            ->where('remittance_senders', $remittance_senders)
            ->where('sanitation', $sanitation)
            ->where('electronics_instrument', $electronics_instrument)
            ->where('social_security', $social_security)
            ->where('security_program', $security_program)
            ->where('multi_building_house', $multi_building_house)
            ->where('ripe_house', $ripe_house)
            ->where('semi_ripe_house', $semi_ripe_house)
            ->where('tin_shed_house', $tin_shed_house)
            ->where('raw_house', $raw_house)
            ->where('probable_rate', $probable_rate)
            ->where('halson_percentage', $halson_percentage)
            ->where('halson_tax', $halson_tax)
            ->where('applying_for', $applying_for)
            ->get();
        $this->assertCount(1, $citizens);
        $citizen = $citizens->first();

        $response->assertRedirect(route('citizens.index'));
        $response->assertSessionHas('citizen.id', $citizen->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $citizen = Citizen::factory()->create();

        $response = $this->get(route('citizens.show', $citizen));

        $response->assertOk();
        $response->assertViewIs('citizen.show');
        $response->assertViewHas('citizen');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $citizen = Citizen::factory()->create();

        $response = $this->get(route('citizens.edit', $citizen));

        $response->assertOk();
        $response->assertViewIs('citizen.edit');
        $response->assertViewHas('citizen');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CitizenController::class,
            'update',
            \App\Http\Requests\CitizenUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $citizen = Citizen::factory()->create();
        $certificate = Certificate::factory()->create();
        $name_bn = fake()->word();
        $mobile = fake()->word();
        $nid = fake()->word();
        $birth_id = fake()->word();
        $passport_no = fake()->word();
        $birth_date = Carbon::parse(fake()->date());
        $father_name_bn = fake()->word();
        $mother_name_bn = fake()->word();
        $occupation = fake()->word();
        $resident = fake()->word();
        $educational_qualification = fake()->word();
        $religion = fake()->word();
        $gender = fake()->word();
        $marital_status = fake()->word();
        $husband_name_en = fake()->word();
        $husband_name_bn = fake()->word();
        $wife_name_en = fake()->word();
        $wife_name_bn = fake()->word();
        $permanent_holding_no = fake()->word();
        $ward_no = fake()->word();
        $moholla_id = fake()->word();
        $permanent_rbs_bn = fake()->word();
        $permanent_district_id = fake()->word();
        $permanent_upazila_id = fake()->word();
        $permanent_postoffice_id = fake()->word();
        $male = fake()->numberBetween(-10000, 10000);
        $female = fake()->numberBetween(-10000, 10000);
        $child = fake()->numberBetween(-10000, 10000);
        $handicap = fake()->numberBetween(-10000, 10000);
        $member_of_earning = fake()->numberBetween(-10000, 10000);
        $number_of_dependents_family = fake()->numberBetween(-10000, 10000);
        $ssc_job_holder = fake()->numberBetween(-10000, 10000);
        $hsc_job_holder = fake()->numberBetween(-10000, 10000);
        $land_owner = fake()->word();
        $income_source = fake()->word();
        $yearly_income = fake()->word();
        $nolkup = fake()->word();
        $expanse_sector = fake()->word();
        $remittance_senders = fake()->numberBetween(-10000, 10000);
        $sanitation = fake()->word();
        $electronics_instrument = fake()->word();
        $social_security = fake()->word();
        $security_program = fake()->word();
        $multi_building_house = fake()->numberBetween(-10000, 10000);
        $ripe_house = fake()->numberBetween(-10000, 10000);
        $semi_ripe_house = fake()->numberBetween(-10000, 10000);
        $tin_shed_house = fake()->numberBetween(-10000, 10000);
        $raw_house = fake()->numberBetween(-10000, 10000);
        $probable_rate = fake()->numberBetween(-10000, 10000);
        $halson_percentage = fake()->randomFloat(/** float_attributes **/);
        $halson_tax = fake()->randomFloat(/** float_attributes **/);
        $applying_for = fake()->numberBetween(-10000, 10000);

        $response = $this->put(route('citizens.update', $citizen), [
            'certificate_id' => $certificate->id,
            'name_bn' => $name_bn,
            'mobile' => $mobile,
            'nid' => $nid,
            'birth_id' => $birth_id,
            'passport_no' => $passport_no,
            'birth_date' => $birth_date->toDateString(),
            'father_name_bn' => $father_name_bn,
            'mother_name_bn' => $mother_name_bn,
            'occupation' => $occupation,
            'resident' => $resident,
            'educational_qualification' => $educational_qualification,
            'religion' => $religion,
            'gender' => $gender,
            'marital_status' => $marital_status,
            'husband_name_en' => $husband_name_en,
            'husband_name_bn' => $husband_name_bn,
            'wife_name_en' => $wife_name_en,
            'wife_name_bn' => $wife_name_bn,
            'permanent_holding_no' => $permanent_holding_no,
            'ward_no' => $ward_no,
            'moholla_id' => $moholla_id,
            'permanent_rbs_bn' => $permanent_rbs_bn,
            'permanent_district_id' => $permanent_district_id,
            'permanent_upazila_id' => $permanent_upazila_id,
            'permanent_postoffice_id' => $permanent_postoffice_id,
            'male' => $male,
            'female' => $female,
            'child' => $child,
            'handicap' => $handicap,
            'member_of_earning' => $member_of_earning,
            'number_of_dependents_family' => $number_of_dependents_family,
            'ssc_job_holder' => $ssc_job_holder,
            'hsc_job_holder' => $hsc_job_holder,
            'land_owner' => $land_owner,
            'income_source' => $income_source,
            'yearly_income' => $yearly_income,
            'nolkup' => $nolkup,
            'expanse_sector' => $expanse_sector,
            'remittance_senders' => $remittance_senders,
            'sanitation' => $sanitation,
            'electronics_instrument' => $electronics_instrument,
            'social_security' => $social_security,
            'security_program' => $security_program,
            'multi_building_house' => $multi_building_house,
            'ripe_house' => $ripe_house,
            'semi_ripe_house' => $semi_ripe_house,
            'tin_shed_house' => $tin_shed_house,
            'raw_house' => $raw_house,
            'probable_rate' => $probable_rate,
            'halson_percentage' => $halson_percentage,
            'halson_tax' => $halson_tax,
            'applying_for' => $applying_for,
        ]);

        $citizen->refresh();

        $response->assertRedirect(route('citizens.index'));
        $response->assertSessionHas('citizen.id', $citizen->id);

        $this->assertEquals($certificate->id, $citizen->certificate_id);
        $this->assertEquals($name_bn, $citizen->name_bn);
        $this->assertEquals($mobile, $citizen->mobile);
        $this->assertEquals($nid, $citizen->nid);
        $this->assertEquals($birth_id, $citizen->birth_id);
        $this->assertEquals($passport_no, $citizen->passport_no);
        $this->assertEquals($birth_date, $citizen->birth_date);
        $this->assertEquals($father_name_bn, $citizen->father_name_bn);
        $this->assertEquals($mother_name_bn, $citizen->mother_name_bn);
        $this->assertEquals($occupation, $citizen->occupation);
        $this->assertEquals($resident, $citizen->resident);
        $this->assertEquals($educational_qualification, $citizen->educational_qualification);
        $this->assertEquals($religion, $citizen->religion);
        $this->assertEquals($gender, $citizen->gender);
        $this->assertEquals($marital_status, $citizen->marital_status);
        $this->assertEquals($husband_name_en, $citizen->husband_name_en);
        $this->assertEquals($husband_name_bn, $citizen->husband_name_bn);
        $this->assertEquals($wife_name_en, $citizen->wife_name_en);
        $this->assertEquals($wife_name_bn, $citizen->wife_name_bn);
        $this->assertEquals($permanent_holding_no, $citizen->permanent_holding_no);
        $this->assertEquals($ward_no, $citizen->ward_no);
        $this->assertEquals($moholla_id, $citizen->moholla_id);
        $this->assertEquals($permanent_rbs_bn, $citizen->permanent_rbs_bn);
        $this->assertEquals($permanent_district_id, $citizen->permanent_district_id);
        $this->assertEquals($permanent_upazila_id, $citizen->permanent_upazila_id);
        $this->assertEquals($permanent_postoffice_id, $citizen->permanent_postoffice_id);
        $this->assertEquals($male, $citizen->male);
        $this->assertEquals($female, $citizen->female);
        $this->assertEquals($child, $citizen->child);
        $this->assertEquals($handicap, $citizen->handicap);
        $this->assertEquals($member_of_earning, $citizen->member_of_earning);
        $this->assertEquals($number_of_dependents_family, $citizen->number_of_dependents_family);
        $this->assertEquals($ssc_job_holder, $citizen->ssc_job_holder);
        $this->assertEquals($hsc_job_holder, $citizen->hsc_job_holder);
        $this->assertEquals($land_owner, $citizen->land_owner);
        $this->assertEquals($income_source, $citizen->income_source);
        $this->assertEquals($yearly_income, $citizen->yearly_income);
        $this->assertEquals($nolkup, $citizen->nolkup);
        $this->assertEquals($expanse_sector, $citizen->expanse_sector);
        $this->assertEquals($remittance_senders, $citizen->remittance_senders);
        $this->assertEquals($sanitation, $citizen->sanitation);
        $this->assertEquals($electronics_instrument, $citizen->electronics_instrument);
        $this->assertEquals($social_security, $citizen->social_security);
        $this->assertEquals($security_program, $citizen->security_program);
        $this->assertEquals($multi_building_house, $citizen->multi_building_house);
        $this->assertEquals($ripe_house, $citizen->ripe_house);
        $this->assertEquals($semi_ripe_house, $citizen->semi_ripe_house);
        $this->assertEquals($tin_shed_house, $citizen->tin_shed_house);
        $this->assertEquals($raw_house, $citizen->raw_house);
        $this->assertEquals($probable_rate, $citizen->probable_rate);
        $this->assertEquals($halson_percentage, $citizen->halson_percentage);
        $this->assertEquals($halson_tax, $citizen->halson_tax);
        $this->assertEquals($applying_for, $citizen->applying_for);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $citizen = Citizen::factory()->create();

        $response = $this->delete(route('citizens.destroy', $citizen));

        $response->assertRedirect(route('citizens.index'));

        $this->assertModelMissing($citizen);
    }
}
