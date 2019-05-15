<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    function view() {
        $agent = session('agent');

        $bookings = Booking::GetBookingByAgentName($agent);

        return view('bookings')->with('bookings',$bookings);
    }
}
