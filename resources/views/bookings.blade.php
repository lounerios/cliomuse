<table>
@if(count($bookings) > 0)
    <tr>
    @foreach($bookings as $booking)
       <td>{{$booking->travelerFullname}}</td><td>{{$booking->museumBooked}}</td><td>{{$booking->date}}</td>
    @endforeach
    </tr>
@endif
</table>