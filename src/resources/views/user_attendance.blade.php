@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_attendance.css') }}">
@endsection

@section('content')
<div class="user__content">
    <div class="user-heading">
        <p class="user-heading__text">{{ $user->name }}</p>
    </div>

    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">日付</th>
                <th class="attendance-table__header">勤務開始</th>
                <th class="attendance-table__header">勤務終了</th>
                <th class="attendance-table__header">休憩時間</th>
                <th class="attendance-table__header">勤務時間</th>
            </tr>
            @foreach ($attendances as $attendance)
            <tr class="attendance-table__row">
                <td class="attendance-table__text">
                    {{ $attendance->datetimeToDate($attendance->work_start_time) }}
                </td>
                <td class="attendance-table__text">
                    {{ $attendance->datetimeToTime($attendance->work_start_time) }}
                </td>
                <td class="attendance-table__text">
                    {{ $attendance->datetimeToTime($attendance->work_end_time) }}
                </td>
                <td class="attendance-table__text">
                    {{ $attendance->secToTime($attendance->getRestTotal()) }}
                </td>
                <td class="attendance-table__text">
                    {{ $attendance->secToTime($attendance->getWorkTime()) }}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{ $attendances->appends(request()->query())->links('vendor.pagination.custom') }}
</div>
@endsection
