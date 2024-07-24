<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;
use Auth;
use Carbon\Carbon;

class RestController extends Controller
{

    public function store()
    {
        $user_id = Auth::id();

        $attendance = Attendance::where('user_id', $user_id)->latest()->first();

        $rest = [
            'attendance_id' => $attendance->id,
            'rest_start_time' => Carbon::now()
        ];

        Rest::create($rest);

        return redirect('/');
    }

    public function update()
    {
        $user_id = Auth::id();

        $attendance = Attendance::where('user_id', $user_id)->latest()->first();

        $rest = [
            'rest_end_time' => Carbon::now()
        ];

        Rest::where('attendance_id', $attendance->id)->latest()->first()->update($rest);

        return redirect('/');
    }

}
