<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ScoreRecord;
use Livewire\WithPagination;

class ScoreRecordView extends Component
{
    use WithPagination;

    public function render()
    {
        $scoreRecords = ScoreRecord::where('status', 1)
            ->orderBy('score_record_date', 'asc')
            ->paginate(10);
        return view('livewire.score-record-view', [
            'score_records' => $scoreRecords,
        ]);
    }
}
