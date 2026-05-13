<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        return View('admin/dash/dashboard');
    }
}
