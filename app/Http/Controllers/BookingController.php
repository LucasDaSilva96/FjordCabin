<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Cottage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //

    public function create(int $id)
    {

        $unAvailableDates = Booking::where('cottage_id', $id)
            ->where('end_date', '>=', now()->toDateString())
            ->whereIn('status', ['pending', 'confirmed'])
            ->pluck('end_date')
            ->toArray();

        return view('booking.create', [
            'cottage' => Cottage::findOrFail($id),
            'unAvailableDates' => $unAvailableDates
        ]);
    }

    public function create_view(int $id){

        return view('booking.store', [
            'cottage' => Cottage::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if(!$user) {
            return redirect()->route('login');
        }

        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'cottage_id' => 'required|exists:cottages,id',
        ]);

        $cottage = Cottage::findOrFail($request->cottage_id);

        // $booking = new Booking();
        // $booking->start_date = $request->start_date;
        // $booking->end_date = $request->end_date;
        // $booking->guest_name = $request->guest_name;
        // $booking->guest_email = $request->guest_email;
        // $booking->guest_phone = $request->guest_phone;
        // $booking->cottage()->associate($cottage);
        // $booking->save();

        return redirect()->route('home');
    }
}
