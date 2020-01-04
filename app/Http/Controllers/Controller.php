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
    public function activity()
    {
        return view('activity')
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function activityDetail()
    {
        return view("activity_detail")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }

    public function petDetail()
    {
        return view("petDetail")
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
    
    public function chatMessage()
    {
        return view("chatMessage")
            ->with('title', 'Laravel Testing')
            ->with('subtitle', 'Introduction to Laravel');
    }



    public function donate()
    {
            return view("donate")
                ->with('title', 'Laravel Testing')
                ->with('subtitle', 'Introduction to Laravel');
    }

}
