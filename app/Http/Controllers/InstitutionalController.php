<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Config;


class InstitutionalController extends Controller
{


    public function dashboard()
    {
        $user = User::where('id', Auth::id())->first();
        if ($user->su == 1)
            return view('institutional.dashboard');
        return redirect('/');
    }

}
