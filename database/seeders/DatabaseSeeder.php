<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\CertificateSubMenu;
use App\Models\Citizen;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Certificate::factory(1)->create();
        Citizen::factory(5)->create();
        // CertificateSubMenu::factory(5)->create();
        // User::truncate();
        // User::factory()->create([
        //     'name' => 'Administrator',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // $civicManagement = Certificate::create([
        //     'name' => 'Civic Management',
        //     'certificate_name' => 'Citizenship certificate',
        // ]);
        // $tradeLicense = Certificate::create([
        //     'name' => 'Trade License Management',
        //     'certificate_name' => 'Trade License certificate',
        // ]);
        // $hireLicense = Certificate::create([
        //     'name' => 'Heir Management',
        //     'certificate_name' => 'Heir certificate',
        // ]);
        // $familyLicense = Certificate::create([
        //     'name' => 'Family Management',
        //     'certificate_name' => 'Family certificate',
        // ]);
        // CertificateSubMenu::insert([
        //     [
        //         'certificate_id' => $civicManagement->id,
        //         'name' => 'New Applicants',
        //         'route' => 'new_applicants',
        //     ],
        //     [
        //         'certificate_id' => $civicManagement->id,
        //         'name' => 'Certificate Recipients',
        //         'route' => 'certificate_recipients',
        //     ],
        //     [
        //         'certificate_id' => $tradeLicense->id,
        //         'name' => 'New Applicants',
        //         'route' => 'new_applicants',
        //     ],
        //     [
        //         'certificate_id' => $tradeLicense->id,
        //         'name' => 'Certificate Recipients',
        //         'route' => 'certificate_recipients',
        //     ],
        //     [
        //         'certificate_id' => $hireLicense->id,
        //         'name' => 'New Applicants',
        //         'route' => 'new_applicants',
        //     ],
        //     [
        //         'certificate_id' => $hireLicense->id,
        //         'name' => 'Certificate Recipients',
        //         'route' => 'certificate_recipients',
        //     ],
        //     [
        //         'certificate_id' => $familyLicense->id,
        //         'name' => 'New Applicants',
        //         'route' => 'new_applicants',
        //     ],
        //     [
        //         'certificate_id' => $familyLicense->id,
        //         'name' => 'Certificate Recipients',
        //         'route' => 'certificate_recipients',
        //     ],
        // ]);

    }
}
