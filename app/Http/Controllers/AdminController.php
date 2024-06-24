<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.index');
        
    }
    public function administrator()
    {
        return view('admin.administrator');
    }
    public function mentors()
    {
        return view('admin.mentors');
    }
    public function pendingmentors()
    {
        return view('admin.pendingmentors');
    }
    public function mentee()
    {
        return view('admin.mentee');
    }
    public function pendingmentee()
    {
        return view('admin.pendingmentee');
    }
    public function users()
    {
        return view('admin.users');
    }
   
    public function pendingmeeting()
    {
        return view('admin.pendingmeeting');
    } 
    public function approvedmeeting()
    {
        return view('admin.approvedmeeting');
    }

    public function rejectedmeeting()
    {
        return view('admin.rejectedmeeting');
    }
    public function completedmeeting()
    {
        return view('admin.completedmeeting');
    }
    public function allmeeting()
    {
        return view('admin.allmeeting');
    }
    public function allticket()
    {
        return view('admin.allticket');
    }
    public function pendingticket()
    {
        return view('admin.pendingticket');
    }
    public function completedticket()
    {
        return view('admin.completedticket');
    }
}
