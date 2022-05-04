<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function user()
    {
        $user = Auth::user();
        return Inertia::render('Dashboard/General/UserProfile', [
            'user' => $user,
        ]);
    }
}
