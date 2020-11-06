<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('page.users.profil');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if(!empty($request->password)){
            $this->validation($request);
        }

        Auth::user()->name = !empty($request->username) ? $request->username : Auth::user()->name;
        Auth::user()->password = !empty($request->password) ? $request->password : Auth::user()->password;

        Auth::user()->save();

        return back();

    }

    /**
     * validatin password resource.
     *
     */

     public function validation($request){
        $this->validate($request, [
            'password'=>'confirmed'
        ]);
     }
}
