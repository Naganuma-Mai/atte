@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')
<div class="date__content">
    <div class="date-heading">
        <div class="date-heading__item">
            <form class="search-form" action="/attendances/search/date" method="get">
                @csrf
                <div class="search-form__item">
                    <input type="hidden" name="target_date" value="yesterday">
                    <input type="hidden" name="old_target_date" value="{{ $target_date }}">
                    <button class="search-form__button-submit" type="submit"><</button>
                </div>
            </form>
        </div>
        <div class="date-heading__item">
            <p class="date-heading__text">{{ $target_date }}</p>
        </div>
        <div class="date-heading__item">
            <form class="search-form" action="/attendances/search/date" method="get">
                @csrf
                <div class="search-form__item">
                    <input type="hidden" name="target_date" value="tomorrow">
                    <input type="hidden" name="old_target_date" value="{{ $target_date }}">
                    <button class="search-form__button-submit" type="submit">></button>
                </div>
            </form>
        </div>
    </div>

    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">名前</th>
                <th class="attendance-table__header">勤務開始</th>
                <th class="attendance-table__header">勤務終了</th>
                <th class="attendance-table__header">休憩時間</th>
                <th class="attendance-table__header">勤務時間</th>
            </tr>
            @foreach ($attendances as $attendance)
            <tr class="attendance-table__row">
                <td class="attendance-table__text">
                    {{ $attendance->user->name }}
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
