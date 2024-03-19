<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::all();
        return view('index')->with('polls', $polls);
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'question' => 'required|string',
            'options' => 'required|array|min:2',
            'options.*' => 'string',
        ]);

        // Create a new poll instance
        $poll = new Poll();
        $poll->question = $request->question;
        $poll->options = json_encode($request->options);
        $poll->save();

        // Redirect back with success message
        return redirect('/polls')->with('success', 'Poll created successfully.');
    }
}