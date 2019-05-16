<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use  Illuminate\Support\Facades\Storage;

class Booking extends Model
{
    //fields
    public $id;
    public $agent;
    public $travelerFullname;
    public $museumBooked;
    public $date;


    public static function GetBookingByAgentName($agent){
        $bookings = array();
        $contents = trim(Storage::disk('local')->get('cm_agent_bookings.csv'));
        $lines = explode(PHP_EOL, $contents);

        Log::info("Check for agent ".$agent);

        foreach($lines as $line) {
            $fields = explode(',', trim($line)); 

            if(strtoupper($fields[0]) != strtoupper($agent)) {
                continue;
            }

            $newBooking = new Booking();
            $newBooking->id = $fields[1];
            $newBooking->agent = $fields[0];
            $newBooking->travelerFullname = $fields[2];
            $newBooking->museumBooked = $fields[3];
            $newBooking->date = $fields[4];
            Log::info("Found new booking entry with id ".$fields[1]);
            $bookings[] = $newBooking;
        }

        Log::info("Found ".count($bookings)." entries");

        return $bookings;
    }
}
