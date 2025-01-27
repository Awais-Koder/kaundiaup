<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CivicManagementController extends Controller
{
    public function newApplicants()
    {
        return view('civic.new_applicants');
    }

    public function certificateRecipients()
    {
        return view('civic.certificate_recipients');
    }
}
