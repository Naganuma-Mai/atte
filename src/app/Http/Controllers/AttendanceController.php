<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;
use App\Models\User;
use Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        //今回のユーザーの最新の勤怠データ
        $attendance = Attendance::where('user_id', $user_id)->latest()->first();

        //今回のユーザーの勤怠データがある場合
        if($attendance) {
            //最新の勤怠データの勤務開始時間
            $work_start_time = new Carbon($attendance->work_start_time);
            //最新の勤怠データの勤務開始時間の時刻を00:00:00にする（最新の勤怠データの日付）
            $attendanceDay = $work_start_time->startOfDay();
            //今日の日付
            $today = Carbon::today();

            // 最新の勤怠データの日付と今日の日付が同じ場合
            //（今日の勤務開始をしている場合）
            if($attendanceDay == $today) {
                // && (empty($attendance->work_end_time))) {
                // 最新の勤怠データ（＝今日）の勤務終了時間が空の場合
                //（今日の勤務終了をしていない場合）
                if(empty($attendance->work_end_time)) {
                    //今日の最新の休憩データ
                    $rest = Rest::where('attendance_id', $attendance->id)->latest()->first();
                    //今日の休憩データがある場合
                    if($rest) {
                        //今日の最新の休憩データの休憩終了時間が空の場合
                        //（休憩終了をしていない場合）
                        if(empty($rest->rest_end_time)) {
                            $status = "duringRest";
                        //今日の最新の休憩データの休憩終了時間が入っている場合
                        //（休憩終了をしている場合）
                        } else {
                            $status = "duringWork";
                        }
                    //今日の休憩データがない場合
                    } else {
                        $status = "duringWork";
                    }
                //最新の勤怠データ（＝今日）の勤務終了時間が入っている場合
                //（今日の勤務終了をしている場合）
                } else {
                    $status = "afterWork";
                }
            //最新の勤怠データの日付と今日の日付が同じでない場合
            //（今日の勤務開始をしていない場合）
            } else {
                $status = "beforeWork";
            }
        //今回のユーザーの勤怠データがない場合
        } else {
            $status = "beforeWork";
        }

        // dd($status);
        return view('stamp', compact('status'));
    }

    public function store()
    {
        // dd(Auth::id());
        // $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'first_tell', 'second_tell', 'third_tell', 'address', 'building', 'category_id', 'detail']);
        // $attendance = $request->only(['user_id']);

        $user_id = Auth::id();
        //今回のユーザーの最新の勤怠データ(前回（前日以前）の勤怠データ)
        $old_attendance = Attendance::where('user_id', $user_id)->latest()->first();

        //今回のユーザーの勤怠データがある場合
        if($old_attendance) {
            //最新の勤怠データ（＝前回（前日以前）の勤怠データ）の勤務終了時間が空の場合
            //（前回の勤務終了をしていない場合）
            if(empty($old_attendance->work_end_time)) {
                //勤務開始時間から日付を持ってくる
                //勤務終了時間に23:59:59と入れる

                //最新の勤怠データの勤務開始時間
                $old_work_start_time = new Carbon($old_attendance->work_start_time);
                // $attendanceDay = $work_start_time->endOfDay();

                //最新の勤怠データの勤務開始時間の時刻を23:59:59にしたものをwork_end_timeに入れる

                $old_attendance->update([
                    'work_end_time' => $old_work_start_time->endOfDay()
                ]);
            }
        }

        $attendance = [
            'user_id' => $user_id,
            'work_start_time' => Carbon::now()
        ];

        Attendance::create($attendance);

        return redirect('/');
        // return view('stamp', compact('attendance'));
    }

    public function update()
    {
        // $attendance = $request->only(['work_end_time']);
        // dd(Auth::id());

        $user_id = Auth::id();

        $attendance = [
            'work_end_time' => Carbon::now()
        ];

        Attendance::where('user_id', $user_id)->latest()->first()->update($attendance);

        // Attendance::find($request->id)->update($attendance);

        return redirect('/');
    }

    // public function attendance()
    // {
    //     $target_date = Carbon::today()->format('Y-m-d');

    //     $attendances = Attendance::with(['user', 'rests'])->whereDate('work_end_time', $target_date)->paginate(5);

    //     return view('date', compact('attendances', 'target_date'));

    // }

    public function findByDate(Request $request)
    {
        switch($request->target_date) {
            case "today":
                $target_date = Carbon::today()->format('Y-m-d');
                break;
            case "yesterday":
                $old_target_date = new Carbon($request->old_target_date);
                $target_date = $old_target_date->subDay()->format('Y-m-d');
                break;
            case "tomorrow":
                $old_target_date = new Carbon($request->old_target_date);
                $target_date = $old_target_date->addDay()->format('Y-m-d');
                break;
        }

        // $search_date = new Carbon($search_date);
        // $search_date = $search_date->format('Y-m-d');

        $attendances = Attendance::with(['user', 'rests'])->whereDate('work_end_time', $target_date)->paginate(5);

        // $attendances = Attendance::with('user')->DateSearch($search_date)->paginate(5);

        // $target_date = $search_date;

        return view('date', compact('attendances', 'target_date'));
    }

    // public function findByDate(Request $request)
    // {
    //     switch($request->search_date) {
    //         case "yesterday":
    //             $target_date = new Carbon($request->target_date);
    //             $search_date = $target_date->subDay()->format('Y-m-d');
    //             break;
    //         case "tomorrow":
    //             $target_date = new Carbon($request->target_date);
    //             $search_date = $target_date->addDay()->format('Y-m-d');
    //             break;
    //     }

    //     // $search_date = new Carbon($search_date);
    //     // $search_date = $search_date->format('Y-m-d');

    //     $attendances = Attendance::with(['user', 'rests'])->whereDate('work_end_time', $search_date)->paginate(5);

    //     // $attendances = Attendance::with('user')->DateSearch($search_date)->paginate(5);

    //     $target_date = $search_date;

    //     return view('date', compact('attendances', 'target_date'));
    // }

    public function findByUser(Request $request)
    {
        $attendances = Attendance::with('rests')->where('user_id', $request->user_id)->whereNotNull('work_end_time')->paginate(5);

        $user = User::find($request->user_id);

        return view('user_attendance', compact('attendances', 'user'));
    }
    // public function index()
    // {
    //     //$todos = Todo::all();
    //     $todos = Todo::with('category')->get();
    //     $categories = Category::all();
    //     // $message = $request->session()->get('message');
    //     return view('index', compact('todos', 'categories'));
    // }

    // public function search(Request $request)
    // {
    //     $todos = Todo::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
    //     $categories = Category::all();

    //     return view('index', compact('todos', 'categories'));
    // }

    // public function store(TodoRequest $request)
    // {
    //     $todo = $request->only(['category_id', 'content']);
    //     Todo::create($todo);

    //     return redirect('/')->with('message', 'Todoを作成しました');

    //     // return redirect('/');
    //     // return redirect()->route('/', ['message' => 'Todoを作成しました']);
    //     // $message = "Todoを作成しました";
    //     // return redirect()->route('/', compact('message'));
    // }

    // public function admin()
    // {
    //     // $contacts = Contact::with('category')->get();
    //     $contacts = Contact::with('category')->paginate(7);
    //     // $contacts = Contact::Paginate(7);
    //     $categories = Category::all();

    //     return view('admin', compact('contacts', 'categories'));
    // }

}
