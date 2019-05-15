<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Log;

class BookingsController extends Controller
{
    function view() {
        $agent = session('agent');

        if(strlen($agent) == 0) {
            return redirect('/');
        }

        Log::info($agent);

        $bookings = Booking::GetBookingByAgentName($agent);

        return view('bookings')->with('bookings',$bookings);
    }
}
