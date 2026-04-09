<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function digitalMarketing()
    {
        return view('services.digital-marketing');
    }

    public function creativeProduction()
    {
        return view('services.creative-production');
    }

    public function webDevelopment()
    {
        return view('services.web-development');
    }

    public function training()
    {
        return view('services.training');
    }
}
