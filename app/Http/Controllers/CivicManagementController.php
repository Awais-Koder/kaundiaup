<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CivicManagementController extends Controller
{
    public function newApplicants($id)
    {
        $data = Citizen::where(['certificate_id' => $id, 'status' => 'new'])->latest()->get();
        return view('civic.new_applicants' , compact('data'));
    }

    public function certificateRecipients($id)
    {
        $data = Citizen::where(['certificate_id' => $id, 'status' => 'issued'])->latest()->get();
        return view('civic.certificate_recipients' , compact('data'));
    }
}
