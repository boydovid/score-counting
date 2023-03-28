<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ScoreRecord;
use Illuminate\Http\Request;

class ScoreCountingController extends Controller
{
    protected $model;
    protected $userId;

    public function __construct(ScoreRecord $model)
    {
        $this->model = $model;
        $this->userId = auth()->check() ? auth()->user()->id : 1;
    }

    public function getScoreRecord()
    {
        $scoreRecord = $this->model
                ->where('user_id', $this->userId)
                ->where('status', 0)
                ->first();

        if (!$scoreRecord) {
            $scoreRecord = $this->model->create([
                'user_id' => $this->userId,
                'score_record_date' => Carbon::now()->format('Y-m-d H:i:s'),
                'team1Score' => 0,
                'team2Score' => 0,
                'status' => 0,
            ]);
        }

        return $scoreRecord;
    }

    public function index()
    {
        $scoreRecord = $this->getScoreRecord();
        session(['team1Score' => $scoreRecord->team1Score]);
        session(['team2Score' => $scoreRecord->team2Score]);
        $id = $scoreRecord->id;
        $team1Score = session('team1Score', $scoreRecord->team1Score);
        $team2Score = session('team2Score', $scoreRecord->team2Score);
        return view('dashboard', compact('team1Score', 'team2Score', 'id'));
    }

    public function updateScore(Request $request)
    {
        $id = $request->input('id');
        $team = $request->input('team');
        $score = session($team . 'Score', 0) + 1;
        session([$team . 'Score' => $score]);
        $scoreRecord = $this->model->where('id', $id)->update([
            $team .'Score' => $score
        ]);
        return redirect('/');
    }

    public function minusScore(Request $request)
    {
        $id = $request->input('id');
        $team = $request->input('team');
        $score = session($team . 'Score', 0) == 0 ? 0 : session($team . 'Score', 0) - 1;
        session([$team . 'Score' => $score]);
        $scoreRecord = $this->model->where('id', $id)->update([
            $team .'Score' => $score
        ]);
        return redirect('/');
    }

    public function resetScore(Request $request)
    {
        $scoreRecord = $this->model->where('id', $request->id)->update([
            'team1Score' => 0,
            'team2Score' => 0
        ]);
        session(['team1Score' => 0]);
        session(['team2Score' => 0]);
        return redirect('/');
    }

    public function saveScoreRecord(Request $request)
    {

    }
}
