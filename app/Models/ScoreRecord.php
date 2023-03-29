<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScoreRecord extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['record_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRecordDateAttribute(){
        return Carbon::parse($this->score_record_date)->format('Y-m-d');
    }
}
