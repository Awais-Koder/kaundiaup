<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamilyManagementController extends Controller
{
    public function newApplicants()
    {
        return view('family.new_applicants');
    }

    public function certificateRecipients()
    {
        return view('family.certificate_recipients');
    }

    public function showEnCert()
    {
        return view('family.show-en-certificate');
    }

    public function showBnCert()
    {
        return view('family.show-bn-certificate');
    }
}
