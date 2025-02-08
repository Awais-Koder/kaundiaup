<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
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

    public function showEnCert($id)
    {

        $data = Citizen::findOrFail($id);
        return view('heir.show-en-certificate' , compact('data'));
    }

    public function showBnCert($id)
    {
        dd($id);
        $data = Citizen::findOrFail($id);
        return view('heir.show-bn-certificate' , compact('data'));
    }
}
