<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitizenStoreRequest;
use App\Http\Requests\CitizenUpdateRequest;
use App\Models\Citizen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CitizenController extends Controller
{
    public function index(Request $request)
    {
        $citizens = Citizen::all();

        return view('citizen.index', [
            'citizens' => $citizens,
        ]);
    }

    public function create(Request $request)
    {
        return view('citizen.create');
    }
    public function generateTrackingNumber()
    {
        do {
            $trackingNumber = rand(100000, 999999);
        } while (Citizen::where('tracking_number', $trackingNumber)->exists());
        return $trackingNumber;
    }
    public function store(Request $request)
    {
//        $request->validate([
//            'certificate_id' => ['required', 'integer', 'exists:certificates,id'],
//            'name_bn' => ['required'],
//            'name_en' => ['required'],
//            'father_name_en' => ['required'],
//            'father_name_bn' => ['required'],
//            'gender' => ['required'],
//            'permanent_holding_no' => ['required'],
//            'ward_no' => ['required'],
//            'permanent_district_id' => ['required'],
//            'permanent_upazila_id' => ['required'],
//            'permanent_postoffice_id' => ['required'],
//            'male' => ['required'],
//            'female' => ['required'],
//            'probable_rate' => ['required'],
//            'halson_percentage' => ['required'],
//        ]);dd('its here');
        $data = $request->all();
        if (!empty($request->image)) {
            $data['image'] = $request->image->store('citizens', 'public');
        }
        $data['tracking_number'] = $this->generateTrackingNumber();
        $citizen = Citizen::create($data);
        $encryptedId = base64_encode($citizen->id);

        return redirect()->route('certificate.view', $encryptedId);
    }

    public function show(Request $request, Citizen $citizen)
    {
        return view('citizen.show', [
            'citizen' => $citizen,
        ]);
    }

    public function edit(Request $request, Citizen $citizen)
    {
        return view('citizen.edit', [
            'citizen' => $citizen,
        ]);
    }

    public function update(CitizenUpdateRequest $request, Citizen $citizen)
    {
        $citizen->update($request->validated());

        $request->session()->flash('citizen.id', $citizen->id);

        return redirect()->route('citizens.index');
    }

    public function destroy(Request $request, Citizen $citizen)
    {
        $citizen->delete();

        return redirect()->route('citizens.index');
    }
}
