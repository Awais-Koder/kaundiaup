<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CivicManagementController;
use App\Http\Controllers\FamilyManagementController;
use App\Http\Controllers\HeirManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TradeLicenseController;
use App\Http\Controllers\BasicSettings;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    return redirect()->route('login');
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'bn'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale.change');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Civic Management
Route::middleware('auth')->prefix('civic-management')->name('civic.')->group(function () {
    Route::get('/new-applicants', [CivicManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [CivicManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
});

// Trade License Management
Route::middleware('auth')->prefix('trade-license-management')->name('trade.')->group(function () {
    Route::get('/new-applicants', [TradeLicenseController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [TradeLicenseController::class, 'certificateRecipients'])->name('certificate_recipients');
    Route::get('/renewal-applicants', [TradeLicenseController::class, 'renewalApplicants'])->name('renewal_applicants');
    Route::get('/expired-trade-license', [TradeLicenseController::class, 'expiredTradeLicense'])->name('expired_trade_license');
    Route::get('/en-cert', [TradeLicenseController::class, 'showEnCert'])->name('showEnCert');
    Route::get('/bn-cert', [TradeLicenseController::class, 'showBnCert'])->name('showBnCert');
});

// Heir Management
Route::middleware('auth')->prefix('heir-management')->name('heir.')->group(function () {
    Route::get('/new-applicants', [HeirManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [HeirManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
    Route::get('/expired-heir', [HeirManagementController::class, 'expiredHeir'])->name('expired_heir');
    Route::get('/generate', [HeirManagementController::class, 'generate'])->name('generate');
    Route::get('/en-cert', [HeirManagementController::class, 'showEnCert'])->name('showEnCert');
    Route::get('/bn-cert', [HeirManagementController::class, 'showBnCert'])->name('showBnCert');
});

// Family Management
Route::middleware('auth')->prefix('family-management')->name('family.')->group(function () {
    Route::get('/new-applicants', [FamilyManagementController::class, 'newApplicants'])->name('new_applicants');
    Route::get('/certificate-recipients', [FamilyManagementController::class, 'certificateRecipients'])->name('certificate_recipients');
    Route::get('/en-cert', [FamilyManagementController::class, 'showEnCert'])->name('showEnCert');
    Route::get('/bn-cert', [FamilyManagementController::class, 'showBnCert'])->name('showBnCert');
});

// Union Setup
Route::middleware('auth')->prefix('union-setup')->name('union-setup.')->group(function () {
    Route::get('/union-setup', [BasicSettings::class, 'index'])->name('index');
});

// Certificate
Route::middleware('auth')->prefix('certificate')->name('certificate.')->group(function () {
    Route::get('/generate', [CertificateController::class, 'generate'])->name('generate');
    Route::get('/generateTrade', [CertificateController::class, 'generateTrade'])->name('generateTrade');
    Route::get('/TradeRenewal', [CertificateController::class, 'TradeRenewal'])->name('TradeRenewal');
    Route::get('/showBn', [CertificateController::class, 'showBn'])->name('showBn');
    Route::get('/showEn', [CertificateController::class, 'showEn'])->name('showEn');
});

require __DIR__.'/auth.php';


Route::resource('citizens', App\Http\Controllers\CitizenController::class);

Route::resource('certificates', App\Http\Controllers\CertificateController::class);
