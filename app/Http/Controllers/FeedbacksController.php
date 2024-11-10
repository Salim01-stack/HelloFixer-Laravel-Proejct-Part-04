<?php

// app/Http/Controllers/FeedbacksController.php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller

{

public function store(Request $request)
{
    // Validate the incoming request

    $request->validate([

    'rating' => 'required|integer|min:1|max:5', // Ensure the rating is between 1 and 5
    'opinion' => 'required|string', // Ensure the opinion is provided
    ]);

    // Create a new feedback entry using mass assignment

    Feedback::create([

    'rating' => $request->rating, // Get rating from the request
    'opinion' => $request->opinion, // Get opinion from the request

    ]);

    // Redirect back with a success message

    return redirect()->route('feedbacks.create')->with('success', 'Thank you for your feedback!');
}

}