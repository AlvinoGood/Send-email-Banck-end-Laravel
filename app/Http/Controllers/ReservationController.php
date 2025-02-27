<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        try {
            $validatedData = $request->validate([
                'names' => 'required|string|max:30',
                'surnames' => 'required|string|max:30',
                'country' => 'required|string|regex:/^\+[0-9]{1,4}$/',
                'phone' => 'required|string|min:6',
                'email' => 'required|email',
                'room' => 'nullable|string|max:20',
                'messaje' => 'required|string',
            ]);
            
            // trim the data
            $validatedData = array_map('trim', $validatedData);
            
            // create the reservation
            $reservation = Reservation::create($validatedData);
            
            // email of who we want to send email: centro.convenciones@cusco.gob.pe
            Mail::to('example@gmail.com')->send(new ReservationMail($reservation));

            return response()->json([
                'message' => 'Reservation created successfully',
                'data' => $reservation
            ], 201);
            
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error processing reservation: ' . $e->getMessage()
            ], 500);
        }
    }
}
