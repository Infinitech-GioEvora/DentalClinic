<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule;

class AdminController extends Controller
{
    public function index() {
        return view("Admin.Index");
    }

    public function dashboard_data() {
        $data["all"] = Schedule::all()->count();
        $data["accepted"] = Schedule::where('status', 'Accepted')->count();
        $data["declined"] = Schedule::where('status', 'Declined')->count();
        $data["pending"] = Schedule::where('status', 'Pending')->count();
        return response($data);
    }
}
