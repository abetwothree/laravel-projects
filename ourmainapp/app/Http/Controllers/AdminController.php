<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminGate() {
        return 'WE ARE ADMINS';
    }
}
