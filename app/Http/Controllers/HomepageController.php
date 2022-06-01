<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\banner;
use App\Models\category;
use App\Models\post;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;


class HomepageController extends Controller
{


    public function cloudflareImage()
    {
        $token = "DhLGwokORgoCqPQBp854PD4ILsNlaVGDi7FhqR1e";
    }

    public function index()
    {
        $cData = new \ArrayObject();
        $banners = banner::orderBy('place')->orderBy('sort')->get();
        foreach ($banners as $key => $val) {
            $cData->place[$val->place][] = $val;
        }
        $cData->company = company::where('category_id', 173)->limit(3)->get();

        $cData->data = post::where('publish_time', "<", date("Y-m-d H:i:s"))->orderByDesc('publish_time')->get();
        //if ($this->ismobile())  return view('home.mobil-index', ['cData' => $cData]);
        if (Auth::check()) {
            $user = User::where('id', Auth::id())->first();
            if ($user->defaultType == 1)
                return view('institutional.dashboard', ['cData' => $cData]);
            else if ($user->defaultType == 2)
                return view('individual.dashboard', ['cData' => $cData]);
            if ($user->su == 1)
                return view('home.index', ['cData' => $cData, 'module' => "solaris"]);
        }
        return view('home.index', ['cData' => $cData]);
    }

    public function category(Request $request)
    {
        $cData = new \ArrayObject();
        $cData->category = category::find(request("id"));
        $cData->cities = Address::where('parent_id', 0)->get();
        $cData->uniType = category::where("parent_id", 57)->get();
        $cData->programs = category::where("parent_id", 66)->get();
        $cData->degrees = category::where("parent_id", 61)->get();
        $cData->uniPosts = post::where("category_id", 49)->get();
        $cData->uni = category::where("parent_id", 49)->get();

        if ($cData->category->theme == "1") {
            if (request("title2") == "universities") {
                $cData->company = Company::where('category_id', request("id"))->paginate(5);
                $cData->type = 1;
            } else if (request("title2") == "entrepreneurial-universities") {
                $cData->company = Company::where('category_id', 147)->paginate(5);
                $cData->type = 3;
            } else {
                $cData->company = Company::where('category_id', 147)->paginate(5);
                $cData->type = 2;
            }
            $cData->padding = "150";
        } elseif ($cData->category->theme == "4") {
            $cData->categories = category::where("parent_id", $request->id)->get();
            $cData->faculties = category::where("parent_id", 155)->get();
            $cData->company = Company::where('parent_id', 0)->get();
            $cData->padding = "150";
        } elseif ($cData->category->theme == "list") {
            $cData->categories = category::where("parent_id", $request->id)->get();
            $cData->list = $cData->categories;
            $cData->padding = "150";
        } elseif ($cData->category->theme == "accordion" || $cData->category->theme == "description") {

            $cData->categories = category::where("parent_id", $request->id)->get();
            $cData->posts = post::where("category_id", $request->id)->get();
            $cData->padding = "80";
            $cData->check = 'false';
            foreach ($cData->posts as $key => $val) {
                if ($val->category_id == 40) {
                    $cData->check = 'true';
                }
            }
        } elseif ($cData->category->theme == "calendar") {
            $cData->company = Company::where('parent_id', 0)->get();
            $cData->padding = "150";
        }
        return view('companies.' . $cData->category->theme, ['cData' => $cData]);
    }

    public function post(Request $request)
    {

        $cData = new \ArrayObject();
        $banners = banner::orderBy('place')->orderBy('sort')->get();
        foreach ($banners as $key => $val) {
            $cData->place[$val->place][] = $val;
        }
        $cData->company = company::find(request("id"));
        $cData->category = category::find($cData->company->category_id);
        $cData->cities = Address::where('parent_id', 0)->get();
        $cData->uniType = category::where("parent_id", 57)->get();
        $cData->programs = category::where("parent_id", 66)->get();
        $cData->degrees = category::where("parent_id", 61)->get();
        $cData->uniPosts = post::where("category_id", 49)->get();
        $cData->padding = "80";
        return view('home.post', ['cData' => $cData]);
    }

    public function dormitories()
    {
        $cData = new \ArrayObject();
        $cData->company = company::where('category_id', 173)->get();
        $cData->category = category::where('id', 173)->first();
        $cData->padding = "150";
        $cData->cities = Address::where('parent_id', 0)->get();
        return view('companies.dormitories', ['cData' => $cData]);
    }
}
