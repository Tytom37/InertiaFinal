<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;

class BookingController extends Controller
{
    public function index() {
        $bookings = Booking::with('event')->orderBy('name')->get();

        return inertia('Books', [
            'bookings' => $bookings
        ]);
        // $user = auth()->user();
        // $event_id = $user->event_id ?? null;
        // $bookings = Booking::where('event_id', $event_id)
        //     ->with('event')
        //     ->orderBy('id')
        //     ->get();
        // return inertia('Books', ['bookings' => $bookings]);
    }

    public function create() {
        $events = Event::all();
        return inertia('Booking', ['events' => $events]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'event_id' => 'required'
        ]);

        $user_id = auth()->user()->id ?? null;
        $request->merge(['user_id' => $user_id]);

        Booking::create($request->all());
        return redirect('/booking');
    }

    public function destroy(Booking $booking) {
        $booking->delete();
        $bookings = Booking::with('event')->orderBy('name')->get();
        return redirect('/booking')->with('bookings', $bookings);
    }

    public function edit(Booking $booking) {
        $events = Event::all();
        return inertia('Edit', [
            'booking' => $booking,
            'events' => $events,
            'selectedEvent' => $booking->event
        ]);
    }
    

    public function update(Request $request, Booking $booking) {
        $fields = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'event_id' => 'required',

        ]);

        $booking->update($fields);

        return redirect('/booking')->with('success', 'Booking updated');
    }
}
