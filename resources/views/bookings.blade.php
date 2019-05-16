<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'demo app')}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style>
    .row-header {
        background-color: lightblue;
        border: 1px solid;
    }

    .col-header {
        font-weight: bold;
    }
    .grid-border {
        border: 1px solid;
    }
    </style>
    <body>
        <div class="container">
           <h3>My bookings page</h1>
           @if(count($bookings) > 0)
           <div class="container">
               <div class="row row-header grid-border">
                   <div class="col col-header">Agent Name</div>
                   <div class="col col-header">Booking id</div>
                   <div class="col col-header">Traveler's Full Name</div>
                   <div class="col col-header">Museum booked</div>
                   <div class="col col-header">Date</div>
               </div>
               @foreach($bookings as $b)
                  <div class="row grid-border">
                      <div class="col">{{$b->agent}}</div>
                      <div class="col">{{$b->id}}</div>
                      <div class="col">{{$b->travelerFullname}}</div>
                      <div class="col">{{$b->museumBooked}}</div>
                      <div class="col">{{$b->date}}</div>
                  </div>
               @endforeach
            </div>
            @else
            <div class="alert alert-dark" role="alert">
                No Bookings
            </div>
        @endif
        </div>
    </body>
<html>