<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificateStoreRequest;
use App\Http\Requests\CertificateUpdateRequest;
use App\Models\Certificate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $certificates = Certificate::all();

        return view('certificate.index', [
            'certificates' => $certificates,
        ]);
    }

    public function create(Request $request): Response
    {
        return view('certificate.create');
    }

    public function store(CertificateStoreRequest $request): Response
    {
        $certificate = Certificate::create($request->validated());

        $request->session()->flash('certificate.id', $certificate->id);

        return redirect()->route('certificates.index');
    }

    public function show(Request $request, Certificate $certificate): Response
    {
        return view('certificate.show', [
            'certificate' => $certificate,
        ]);
    }

    public function edit(Request $request, Certificate $certificate): Response
    {
        return view('certificate.edit', [
            'certificate' => $certificate,
        ]);
    }

    public function update(CertificateUpdateRequest $request, Certificate $certificate): Response
    {
        $certificate->update($request->validated());

        $request->session()->flash('certificate.id', $certificate->id);

        return redirect()->route('certificates.index');
    }

    public function destroy(Request $request, Certificate $certificate): Response
    {
        $certificate->delete();

        return redirect()->route('certificates.index');
    }
}
