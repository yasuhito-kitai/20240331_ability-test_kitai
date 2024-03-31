@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection


@section('content')

<div class="section-title">
    <h2>Confirm</h2>
</div>

<div class="confirm-content">
    <form class="form" action="/contacts" method="post">
        @csrf
        <table class="confirm-table">
            <tr>
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">
                    <input type="text" name="name" value="{{$contact["first_name"]}}　{{$contact["last_name"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                    <input type="hidden" name="gender" value="{{$contact["gender"]}}" readonly />
                    <?php
                    if ($contact['gender'] == '1') {
                        echo '男性';
                    } else if ($contact['gender'] == '2') {
                        echo '女性';
                    } else {
                        echo 'その他';
                    }

                    ?>
                </td>
            </tr>


            <tr>
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                    <input type="email" name="email" value="{{$contact["email"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text">
                    <input type="tel" name="tel" value="{{$contact["tel_1"]}}{{$contact["tel_2"]}}{{$contact["tel_3"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{$contact["address"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                    <input type="text" name="building" value="{{$contact["building"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                    <input type="text" name="content" value="{{$contact["content"]}}" readonly />
                </td>
            </tr>

            <tr>
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                    <input type="text" name="detail" value="{{$contact["detail"]}}" readonly />
                </td>
            </tr>

        </table>

        <div class="form__button">
            <button class="form__button-submit" type="submit" Value="">送信</button>
        </div>

        <div class="correction__button">
            <a href="/" class="correction__button-back">修正</a>
        </div>
    </form>
    @endsection