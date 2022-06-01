<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($type)
    {
        return view('auth.register', ['type' => $type]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $user = new User();
        $user->name = $request->name;
        if ($request->surname)
            $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($request->type == "su")
            $user->su = 1;
        else{
            $user->defaultType = $request->type == "institutional" ? 1 : 2;
            $user->isInstitutional = $request->type == "institutional" ? 1 : 0;
            $user->isIndividual = $request->type == "individual" ? 1 : 0;
        }
        $user->save();
        event(new Registered($user));
        Auth::login($user);
        return redirect('/');
    }
}
