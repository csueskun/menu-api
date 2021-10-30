<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function artisan(Request $request)
    {
        $command = $request->input('command');
        Artisan::call($command);
    }
}