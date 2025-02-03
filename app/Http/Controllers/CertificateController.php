<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificateStoreRequest;
use App\Http\Requests\CertificateUpdateRequest;
use App\Models\Certificate;
use App\Models\Citizen;
use App\Models\GeneratedCertificate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CertificateController extends Controller
{
    public function generate($id)
    {
        $data = Citizen::findOrFail($id);
        return view('certificate.generate', compact('data'));
    }

    public function storeCertificate(Request $request, $id)
    {
        $data = Citizen::findOrFail($id);
        $data->status = 'issued';
        $data->save();
        $certificateData = $request->all();
        $certificateData['citizen_id'] = $id;
        $certificateData['certificate_id'] = $data->certificate_id;
        $certificateData['serial_number'] = $this->generateSerialNumber();
        $certificateData['certificate_number'] = date('Y') . time() . str_pad($data->certificate_id, 3, '0', STR_PAD_LEFT);
        GeneratedCertificate::create($certificateData);
        return redirect()->route('certificate_recipients', $data->certificate_id);
    }

    public function showBn()
    {
        return view('certificate.showBn');
    }
    public function showEn()
    {
        return view('certificate.showEn');
    }


    public function generateSerialNumber()
    {
        do {
            $serialNumber = rand(100000, 999999);
        } while (GeneratedCertificate::where('serial_number', $serialNumber)->exists());

        return $serialNumber;
    }
}
