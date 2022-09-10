<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Dashboard', [
            'stats' => [
                'payment_outstanding' => 1234,
                'receivable_outstanding' => 1234,
                'monthly_tons' => 1234,
                'yearly_tons' => 1234,
            ],
        ]);
    }
}
