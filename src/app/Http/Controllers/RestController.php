<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;
use Auth;
use Carbon\Carbon;

class RestController extends Controller
{

    public function store()
    {

        // $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'first_tell', 'second_tell', 'third_tell', 'address', 'building', 'category_id', 'detail']);
        // $attendance = $request->only(['user_id']);

        $user_id = Auth::id();

        $attendance = Attendance::where('user_id', $user_id)->latest()->first();

        $rest = [
            'attendance_id' => $attendance->id,
            'rest_start_time' => Carbon::now()
        ];

        Rest::create($rest);

        return redirect('/');
        // return view('stamp', compact('attendance'));
    }

    public function update()
    {
        // $attendance = $request->only(['work_end_time']);

        $user_id = Auth::id();

        $attendance = Attendance::where('user_id', $user_id)->latest()->first();

        $rest = [
            'rest_end_time' => Carbon::now()
        ];

        // Rest::find($request->id)->update($rest);

        Rest::where('attendance_id', $attendance->id)->latest()->first()->update($rest);

        return redirect('/');
    }

}
