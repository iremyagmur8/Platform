<?php

namespace App\Http\Controllers;


use App\Models\Address;

use App\Models\Company;
use App\Models\CompanyInformation;

class DenemeController extends Controller
{

    public function index()
    {
        $company = Company::where('name', 'ALTINBAŞ ÜNİVERSİTESİ')->get();
        dd($company);
    }

    public function address()
    {
        $address = Address::where('name','Kıbrıs')->first();
        dd($address);
    }
}
