<?php
namespace App\Services;

use App\Models\Certificate;

class DefaultService {
    public static function getCertificates()
    {
        return Certificate::with('subMenus')->get();
    }
    public static function getCertificateName($id)
    {
        return Certificate::findOrFail($id);
    }
}
###
