<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('role_as', '0')->count();
        $saldo = User::sum('saldo'); // Sum the saldo column to get the total balance

        // Dummy transaction data for the chart (replace with real data if available)
        $transactions = [
            'January' => 5000,
            'February' => 10000,
            'March' => 2000,
            'April' => 15000,
            'May' => 3000,
        ];

        return view('admin.dashboard', compact('users', 'saldo', 'transactions'));
    }
}
