@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('button')
<nav>
    <ul class="header-button">
        <li class="header-button__item">
            <a class="header-button__item-btn" href="/login">login</a>
        </li>
    </ul>
</nav>
@endsection


@section('content')
<div class="section-title">
    <h2>Register</h2>
</div>

<div class="register__content">

    <form class="register__form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:山田　太郎" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">

                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="例:coachtech1106" value="" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>

            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </div>
    </form>
</div>









@endsection