<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeirManagementController extends Controller
{
    public function newApplicants()
    {
        return view('heir.new_applicants');
    }

    public function certificateRecipients()
    {
        return view('heir.certificate_recipients');
    }

    public function expiredHeir()
    {
        return view('heir.expired_heir');
    }

    public function generate()
    {
        return view('heir.generate');
    }

    public function showEnCert()
    {
        return view('heir.show-en-certificate');
    }

    public function showBnCert()
    {
        return view('heir.show-bn-certificate');
    }
}
