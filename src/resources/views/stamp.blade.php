@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
<div class="stamp__content">
    <div class="stamp__heading">
        {{ Auth::user()->name }}さんお疲れ様です！
    </div>
    <!-- 休憩時間のバリデーションのエラーメッセージ表示 -->
    <div class="stamp__alert">
        @if (session('message'))
        <div class="stamp__alert--danger">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="stamp_inner">
        <form class="form" action="/attendances/create" method="post">
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit" id="work_start">勤務開始</button>
            </div>
        </form>

        <form class="form" action="/attendances/update" method="POST">
            @method('PATCH')
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit" id="work_end">勤務終了</button>
            </div>
        </form>

        <form class="form" action="/rests/create" method="post">
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit" id="rest_start">休憩開始</button>
            </div>
        </form>

        <form class="form" action="/rests/update" method="POST">
            @method('PATCH')
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit" id="rest_end">休憩終了</button>
            </div>
        </form>

        <script>
            window.onload = function() {
                var status = @json($status);
                switch (status){
                    //勤務開始前は、勤務開始ボタンのみ押せる
                    case "beforeWork":
                        document.getElementById("work_start").disabled = false;
                        document.getElementById("work_end").disabled = true;
                        document.getElementById("rest_start").disabled = true;
                        document.getElementById("rest_end").disabled = true;
                        break;
                    //勤務終了後は、どのボタンも押せない
                    case "afterWork":
                        document.getElementById("work_start").disabled = true;
                        document.getElementById("work_end").disabled = true;
                        document.getElementById("rest_start").disabled = true;
                        document.getElementById("rest_end").disabled = true;
                        break;
                    //勤務中は、休憩開始ボタンと勤務終了ボタンが押せる
                    case "duringWork":
                        document.getElementById("work_start").disabled = true;
                        document.getElementById("work_end").disabled = false;
                        document.getElementById("rest_start").disabled = false;
                        document.getElementById("rest_end").disabled = true;
                        break;
                    //休憩中は、休憩終了ボタンのみ押せる
                    default:
                        document.getElementById("work_start").disabled = true;
                        document.getElementById("work_end").disabled = true;
                        document.getElementById("rest_start").disabled = true;
                        document.getElementById("rest_end").disabled = false;
                }
            }
        </script>
    </div>
</div>
@endsection
