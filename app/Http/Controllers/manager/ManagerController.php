<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    
    public function showusers()
    {
        return view('manager.showusers');
    }
}