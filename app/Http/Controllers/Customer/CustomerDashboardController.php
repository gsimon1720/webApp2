<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Ticket;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tickets = Ticket::with('event')->where('user_id', $user->id)->get();

        return view('customer.dashboard', compact('tickets'));
    }

    
}
