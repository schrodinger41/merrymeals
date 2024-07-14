<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Show the donation form
    public function showForm()
    {
        return view('donation/donate');
    }

    // Process the donation
    public function processDonation(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Process the donation logic here
        // For example, you might save the donation to the database, send an email, etc.

        return redirect()->route('donate')->with('success', 'Thank you for your donation!');
    }
}
