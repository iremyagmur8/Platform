<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\product;
use App\Models\solaris;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Config;


class SolarisController extends Controller
{

    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        if ($user->su == 1){
            $cData = new \ArrayObject();
            return view('solaris.index', ['cData' => $cData, 'module' => "solaris"]);
        }
        return redirect('/');
    }

    public function login()
    {
        return view('auth.solarislogin');
    }

    public function openmodule()
    {
        $user = User::where('id', Auth::id())->first();
        $cData = new \ArrayObject();
        if (request("module") == "posts") {
            $cData->categories = category::all();
            $cData->data = post::all();

        }

        if (request("module") == "products") {
            ProductController::index();

        }

        if (request("module") == "orders") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "banners") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "admin") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "settings") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "contact") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "galleries") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }

        if (request("module") == "videogalleries") {
            $cData->categories = category::all();
            $cData->data = post::all();
        }
        if (request("module") == "categories") {
            $cData->all = category::where('parent_id', '=', 0)->orderBy('sort')->get();

            $allCategories = new \ArrayObject();

            foreach (Config::get('solaris.catTypes') as $key => $val) {
                $allCategories[$val["id"]] = Category::where('parent_id', '=', 0)->where('type', '=', $val["id"])->orderBy('sort')->get();
            }

            if ($user->su == 1){
                $cData = new \ArrayObject();
                return view('solaris.categories.categoryTreeview', ['allCategories' => $allCategories, 'cData' => $cData, 'module' => request('module')]);
            }
            return redirect('/');
        }
        if ($user->su == 1){
            $cData = new \ArrayObject();
            return view('solaris.categories.categoryTreeview', ['allCategories' => $allCategories, 'cData' => $cData, 'module' => request('module')]);
        }
        return redirect('/');
    }


    public function create()
    {
        $user = User::where('id', Auth::id())->first();
        if ($user->su == 1){
            $cData = new \ArrayObject();
            return view('solaris.create-' . request("module"), ['cData' => $cData, 'module' => request('module')]);
        }
        return redirect('/');


    }


    public function store(Request $request)
    {
        //
    }


    public function show(solaris $solaris)
    {
        //
    }


    public function edit(solaris $solaris)
    {
        //
    }


    public function update(Request $request, solaris $solaris)
    {
        //
    }


    public function destroy(solaris $solaris)
    {
        //
    }
}
