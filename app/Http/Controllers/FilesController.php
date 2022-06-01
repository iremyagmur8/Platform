<?php

namespace App\Http\Controllers;

use App\Models\files;
use App\Models\User;
use Illuminate\Http\Request;

class FilesController extends Controller
{

    public function delete()
    {
        $user = User::where('id', Auth::id())->first();
        if ($user->su == 1){
            $bol = explode("/", request("file"));
            $sil = end($bol);

            files::where("file", "=", $sil)->delete();
            // dd(request("file"));
            return;

        }
        return redirect('/');
    }


    public function sort()
    {
        $user = User::where('id', Auth::id())->first();
        if ($user->su == 1){
            foreach (request("file") as $key=>$val) {
                files::where("file", "=", $val)->update(["sort"=>$key]);
            }

        }
        return redirect('/');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\files $files
     * @return \Illuminate\Http\Response
     */
    public function show(files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\files $files
     * @return \Illuminate\Http\Response
     */
    public function edit(files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\files $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\files $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(files $files)
    {
        //
    }
}
