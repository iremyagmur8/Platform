<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\UniversityDepartment;
use Illuminate\Http\Request;

class UniversityDepartmentController extends Controller
{
    public function index(){
        $cData = new \ArrayObject();
        $cData->category = category::find(request("id"));
        $cData->padding = "80";
        $cData->university = UniversityDepartment::where('department_id', request('id'))->get();
        return view('home.universities', ['cData' => $cData]);
    }
}
