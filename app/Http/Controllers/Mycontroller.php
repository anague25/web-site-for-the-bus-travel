<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class Mycontroller extends Controller
{
   





    public function hotels()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('hotels',['data'=> $data]);
    }


   


    public function homeadmin()
    {
       
        return view('layouts.index');
    }

    public function loisirs()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('loisirs',['data'=> $data]);
    }

    public function popularplace()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('popularplace',['data'=> $data]);
        
    }

    public function prixhotel()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('prixhotel',['data'=> $data]);
    }

    public function travel()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where("id","=",Session::get('loginId'))->first();
        }
        return view('travel',['data'=> $data]);
    }
}
