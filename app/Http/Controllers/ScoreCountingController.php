<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreCountingController extends Controller
{
    public function index()
    {
        $team1Score = session('team1Score', 0);
        $team2Score = session('team2Score', 0);
        return view('dashboard', compact('team1Score', 'team2Score'));
    }

    public function updateScore(Request $request)
    {
        $team = $request->input('team');
        $score = session($team . 'Score', 0) + 1;
        session([$team . 'Score' => $score]);
        return redirect('/');
    }

    public function minusScore(Request $request)
    {
        $team = $request->input('team');
        $score = session($team . 'Score', 0) == 0 ? 0 : session($team . 'Score', 0) - 1;
        session([$team . 'Score' => $score]);
        return redirect('/');
    }

    public function resetScore()
    {
        session(['team1Score' => 0]);
        session(['team2Score' => 0]);
        return redirect('/');
    }
}
