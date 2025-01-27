<?php
namespace App\Services;

use App\Models\Certificate;

class DefaultService {
    public static function getCertificates()
    {
        return Certificate::all();
    }
}
###
