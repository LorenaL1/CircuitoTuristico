<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User, App\Http\Models\Attractive;

class DashboardController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    	$this->middleware('user.status');
    	$this->middleware('user.permissions');
    	$this->middleware('isadmin');
    }

    public function getDashboard(){
    	$users = User::count();
    	$attractives = Attractive::where('status', '1')->count();
    	$data = ['users' => $users, 'attractives' => $attractives];
    	return view('admin.dashboard', $data);
    }
}
