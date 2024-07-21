@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
<div class="user__content">
    <div class="user-heading">
        <p class="user-heading__text">ユーザー一覧</p>
    </div>
    <div class="user-table">
        <table class="user-table__inner">
            <tr class="user-table__row">
                <th class="user-table__header">名前</th>
                <th class="user-table__header">メールアドレス</th>
                <th></th>
            </tr>
            @foreach ($users as $user)
            <tr class="user-table__row">
                <td class="user-table__text">
                    {{ $user->name }}
                </td>
                <td class="user-table__text">
                    {{ $user->email }}
                </td>
                <td class="user-table__text">
                    <form class="form" action="/user/attendance" method="get">
                        @csrf
                        <div class="form__item">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button class="form__button-submit" type="submit">勤怠表</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{ $users->links('vendor.pagination.custom') }}
</div>
@endsection
