<?php

namespace App\Http\Controllers\FrontEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function company()
    {
        return view('front-end.dashboard.company');
    }
}
