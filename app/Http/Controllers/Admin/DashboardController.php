<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index(){

        return view('admin.pages.dashboard');
    }
    public function users(){
        $users = User::all();
        return view('admin.pages.users')->with(['users' => $users]);
    }
}
