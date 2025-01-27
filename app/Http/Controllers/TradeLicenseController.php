<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeLicenseController extends Controller
{
    public function newApplicants()
    {
        return view('trade.new_applicants');
    }

    public function certificateRecipients()
    {
        return view('trade.certificate_recipients');
    }

    public function renewalApplicants()
    {
        return view('trade.renewal_applicants');
    }

    public function expiredTradeLicense()
    {
        return view('trade.expired_trade_license');
    }

    public function showEnCert()
    {
        return view('trade.show-en-certificate');
    }

    public function showBnCert()
    {
        return view('trade.show-bn-certificate');
    }
}
