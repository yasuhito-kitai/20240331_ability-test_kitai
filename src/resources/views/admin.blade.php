@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('button')
<nav>
    <ul class="header-button">
        <li class="header-button__item">
            <form class="header-button__form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
            </form>
        </li>
    </ul>
</nav>
@endsection


@section('content')
<div class="section-title">
    <h2>Admin</h2>
</div>


<form class="search-form" action="/admin/search" method="get">
    @csrf
    <div class="search-form__item">
        <input class="search-form__item-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ old('keyword') }}">
        <select class="search-form__item-select" name="gender">
            <option value="">性別</option>
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
        </select>

        <select class="search-form__item-select" name="content">
            <option value="">お問い合わせの種類</option>
            <option value=" delivery">商品のお届けについて</option>
            <option value="exchange">商品の交換について</option>
            <option value="trouble">商品トラブル</option>
            <option value="contact">ショップへのお問い合わせ</option>
            <option value="other">その他</option>
        </select>

        <input type="date" name="date">

    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
    </div>

    <input type="reset" value="リセット">

</form>

<form action="" method="">
    <button class=export__button>エクスポート</button>
    </button>
</form>

<div class="admin-table">
    <table class="admin-table__inner">
        <tr class="admin-table__row">
            <th class="admin-table__header">お名前</th>
            <th class="admin-table__header">性別</th>
            <th class="admin-table__header">メールアドレス</th>
            <th class="admin-table__header">お問い合わせの種類</th>
        </tr>
        <tr>
            <td class="admin-table__data">お名前</td>
            <td class="admin-table__data">性別</td>
            <td class="admin-table__data">メールアドレス</td>
            <td class="admin-table__data">お問い合わせの種類</td>
            <td class="admin-table__data">お名前</td>
            <td>
                <div class="modal-open"><a href="#modal">モーダルを開く</a></div>
                <div class="modal" id="modal">
                    <a href="#!" class="overlay"></a>
                    <div class="modal-wrapper">
                        <div class="modal-contents">
                            <a href="#!" class="modal-close">✕</a>
                            <div class="modal-content">
                                <div class="modal-table">
                                    <table class="modal-table__inner">
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">お名前</th>
                                            <td class="modal-table__data">お名前</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">性別</th>
                                            <td class="modal-table__data">性別</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">メールアドレス</th>
                                            <td class="modal-table__data">メールアドレス</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">電話番号</th>
                                            <td class="modal-table__data">電話番号</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">住所</th>
                                            <td class="modal-table__data">住所</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">建物名</th>
                                            <td class="modal-table__data">建物名</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">お問い合わせの種類</th>
                                            <td class="modal-table__data">お問い合わせの種類</td>
                                        </tr>
                                        <tr class="modal-table__row">
                                            <th class="modal-table__header">お問い合わせ内容</th>
                                            <td class="modal-table__data">お問い合わせ内容</td>
                                        </tr>
                                    </table>
                                </div>

                                <form class="delete-form" action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="delete-form__button">
                                        <input type="hidden" name="id" value="">
                                        <button class="delete-form__button-submit" type="submit">削除</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection