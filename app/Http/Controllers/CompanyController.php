<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\category;
use App\Models\Company;
use App\Models\files;
use App\Models\Logo;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::where('user_id', Auth::id())->first();
        $cData = new \ArrayObject();
        $cData->company = [];
        if ($company) {
            $cData->company = $company;
            $cData->auth = 2;
            $address = json_decode($company->address);
            foreach (['city', 'town', 'district', 'neighborhood', 'address'] as $item)
                $cData->{$item} = $address->{$item};
            $cData->towns = Address::where('parent_id', $address->city)->get();
            $cData->districts = Address::where('parent_id', $address->town)->get();
            $cData->neighborhoods = Address::where('parent_id', $address->district)->get();
        } else {
            $cData->auth = 1;
            foreach (['city', 'town', 'district', 'neighborhood', 'address'] as $item)
                $cData->{$item} = "";
            foreach (['towns', 'districts', 'neighborhoods'] as $item)
                $cData->{$item} = [];
        }
        $cData->cities = Address::where('parent_id', 1)->get();
        return view('institutional.myBusiness', ['cData' => $cData]);

    }

    public function dormitories()
    {
        $cData = new \ArrayObject();
        $cData->company = company::where('category_id', 173)->get();
        $cData->university = company::where('category_id', 147)->get();
        return view('solaris.dormitories',['cData' => $cData, 'module' => 'dormitories']);
    }

    public function universities()
    {
        $cData = new \ArrayObject();
        $cData->company = company::where('category_id', 147)->get();
        return view('solaris.universities', ['cData' => $cData, 'module' => 'universities']);
    }

    public function createDormitories()
    {
        $cData = new \ArrayObject();
        $cData->cities = Address::where('parent_id', 0)->get();
        $cData->university = company::where('category_id', 147)->get();
        return view('solaris.create-dormitories',['cData' => $cData, 'module' => 'dormitories']);
    }

    public function createUniversities()
    {
        $cData = new \ArrayObject();
        $cData->cities = Address::where('parent_id', 0)->get();
        $cData->type = Category::where([['parent_id','=',57],['id', '!=' , 58]])->get();
        return view('solaris.create-universities', ['cData' => $cData, 'module' => 'universities']);
    }

    public function address($address, $id)
    {
        $cData = new \ArrayObject();
        $data = Address::where('parent_id', $id)->get();
        $cData->{$address} = $data;
        return view('inc.myBusiness.' . $address, ['cData' => $cData]);
    }

    public function company(Request $request)
    {
        try {
            $company = Company::where('user_id', Auth::id())->first();
            if (!$company) {
                $company = new Company();
                $company->user_id = Auth::id();
                $type = 1;
            } else
                $type = 2;
            foreach (['name', 'commercial_title', 'tax_number', 'phone', 'mail'] as $item)
                $company->{$item} = $request->{$item};
            foreach (['city', 'town', 'district', 'neighborhood', 'address'] as $item)
                $obj_adress[$item] = $request->{$item};
            $company->address = json_encode($obj_adress);
            $company->save();
            $cData = new \ArrayObject();
            $cData->company = $company;
            $cData->auth = 2;
            if ($type == 1) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Company Updated.',
                    'data' => $cData,
                    'type' => 1
                ], 200);
            } else {
                return response()->json([
                    'status' => 1,
                    'message' => 'Company Added',
                    'data' => $cData,
                    'type' => 2
                ], 200);
            }
        } catch (AuthException $e) {
            return response()->json([
                'status' => 0,
                'message' => 'Error'
            ], 400);
        }
    }

    public function search(Request $request)
    {
        $cData = new \ArrayObject();
        if (($request->title == "Universities") && ($request->title1 == 1)) {
            $query = Company::query();
            $query = $query->where('parent_id', 0);
            $query->where(function ($query) {
                if (request('cities'))
                    $query = $query->where('city_id', request('cities'));
                if (request('type')) {
                    if (request('type') != 58) $query = $query->where('type', request('type'));
                }
                if (request('search')) $query = $query->where('name', 'like', '%' . request('search') . '%');
            });
            $cData->company = $query->paginate(5);
            if (request('cities')) $cData->city = Address::where('id', request('cities'))->first();
            if (request('type')) $cData->types = category::where('id', request('type'))->first();
            $cData->category = category::find(147);
            $cData->type = 1;
        }
        if (($request->title == "Faculties") && ($request->title1 == 4)) {
            $query = Category::query();
            $query = $query->where('parent_id', 140);
            $query->where(function ($query) {
                if (request('search')) $query = $query->where('title', 'like', '%' . request('search') . '%');
            });
            $cData->categories = $query->get();
            $cData->category = category::find(140);
        }
        if (($request->title == "Departments") && ($request->title1 == 4)) {
            $query = Category::query();
            $query = $query->where('parent_id', 144);
            $query->where(function ($query) {
                if (request('search')) $query = $query->where('title', 'like', '%' . request('search') . '%');
            });
            $cData->categories = $query->get();
            $cData->category = category::find(144);
        }
        if (request('search')) $cData->search = request('search');
        $cData->cities = Address::where('parent_id', 0)->get();
        $cData->uniType = category::where("parent_id", 57)->get();
        $cData->programs = category::where("parent_id", 66)->get();
        $cData->degrees = category::where("parent_id", 61)->get();
        $cData->uniPosts = post::where("category_id", 49)->get();
        $cData->uni = category::where("parent_id", 49)->get();
        if ($cData->category->theme == "1")
            $cData->padding = "150";
        elseif ($cData->category->theme == "4") {
            $cData->faculties = category::where("parent_id", 155)->get();
            $cData->company = Company::where('parent_id', 0)->get();
            $cData->padding = "150";
        }
        return view('companies.' . $cData->category->theme, ['cData' => $cData]);
    }

    public function dormitory(){
        $cData = new \ArrayObject();
        $cData->category = Company::where('id',request('id'))->first();
        $cData->company = company::where('category_id', 173)->limit(3)->get();
        $cData->padding = "80";
        return view('home.dormitoryDetail', ['cData' => $cData]);
    }

}

