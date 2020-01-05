<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function register()
    {
        return view("register")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function pet()
    {
        return view('pet')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function petOrganization()
    {
        return view('petOrganization')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function activity()
    {
        return view('activity')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function activityOrganization()
    {
        return view('activityOrganization')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function activityDetail()
    {
        return view("activity_detail")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function activityDetailOrganization()
    {
        return view("activityDetailOrganization")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function petDetail()
    {
        return view("petDetail")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function petDetailOrganization()
    {
        return view("petDetailOrganization")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function editPetDetail()
    {
        return view("editPetDetail")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function writePost()
    {
        return view("writePost")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function writeDonate()
    {
        return view("writeDonate")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function login()
    {
        return view("login")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function myPost()
    {
        return view("myPost")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function myPostLogin()
    {
        return view("myPostLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function chatMessage()
    {
        return view("chatMessage")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function chatMessageLogin()
    {
        return view("chatMessageLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }



    public function donate()
    {
        return view("donate")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function donateOrganization()
    {
        return view("donateOrganization")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function reportChart()
    {
        return view("reportChart")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function adminHome()
    {
        return view("adminHome")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function addPet(){
        return view("addPet")
        ->with('title', 'Laravel Testing')
        ->with('subtitle', 'Introduction to Laravel');
    }

    public function adminCheckSys(){
        return view("adminCheckSys")
        ->with('title', 'Laravel Testing')
        ->with('subtitle', 'Introduction to Laravel');
    }
    public function adminRegis(){
        return view("adminRegis")
        ->with('title', 'Laravel Testing')
        ->with('subtitle', 'Introduction to Laravel');
    }
    public function activityLogin(){
        return view("activityLogin")
        ->with('title', 'Laravel Testing')
        ->with('subtitle', 'Introduction to Laravel');
    }
    public function activityDetailLogin(){
        return view("activity_detailLoing")
        ->with('title', 'Laravel Testing')
        ->with('subtitle', 'Introduction to Laravel');
    }
    public function donateLogin()
    {
        return view("donateLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function addPetLogin()
    {
        return view("addPetLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function petLogin()
    {
        return view("petLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function petDetailLogin()
    {
        return view("petDetailLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }
    public function editPetDetailLogin()
    {
        return view("editPetDetailLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function homeLogin()
    {
        return view("homeLogin")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function homeOrganization()
    {
        return view("homeOrganization")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function resultSearch()
    {
        return view("resultSearch")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

}
