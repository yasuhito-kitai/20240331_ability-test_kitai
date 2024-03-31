@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection


@section('content')

<div class="section-title">
    <h2>Contact</h2>
</div>

<div class="contact-container">
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="contact-form__wrapper">
            <div class="contact-form__name">
                <div class="contact-form__title">お名前<span>※</span></div>

                <div class="contact-form__name-first"><input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}"></div>
                <div class="contact-form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>

                <div class="contact-form__name-last"><input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}"></div>
                <div class="contact-form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>



            <div class="contact-form__gender">
                <div class="contact-form__title">性別<span>※</span></div>

                <div class="contact-form__male"><input id="male" type="radio" name="gender" value="1" checked>
                    <label for="male" value="男性">男性</label>
                </div>

                <div class="contact-form__female"><input id="female" type="radio" name="gender" value="2">
                    <label for="female" value="女性">女性</label>
                </div>

                <div class="contact-form__other"><input id="other" type="radio" name="gender" value="3">
                    <label for="other" value="その他">その他</label>
                </div>

                <div class="contact-form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="contact-form__email">
                <div class="contact-form__title">メールアドレス<span>※</span></div>
                <div class="contact-form__email"><input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"></div>

                <div class="contact-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="contact-form__tel">
                <div class="contact-form__title">電話番号<span>※</span></div>
                <div class="contact-form__tel">
                    <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}"><span class="hyphen">-</span>
                    <div class="contact-form__error">
                        @error('tel_1')
                        {{ $message }}
                        @enderror
                    </div>

                    <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}"><span class="hyphen">-</span>
                    <div class="contact-form__error">
                        @error('tel_2')
                        {{ $message }}
                        @enderror
                    </div>

                    <input type=" tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}">
                    <div class="contact-form__error">
                        @error('tel_3')
                        {{ $message }}
                        @enderror
                    </div>
                </div>


            </div>

            <div class="contact-form__address">
                <div class="contact-form__title">住所<span>※</span></div>
                <div class="contact-form__address"><input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"></div>

                <div class="contact-form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="contact-form__building">
                <div class="contact-form__title">建物名</div>
                <div class="contact-form__building"><input type=" text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
                </div>

                <div class="contact-form__error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="contact-form__title">お問い合わせの種類<span>※</span></div>
            <select class="contact-form__content-select" name="content">
                <option value="">選択してください</option>
                @foreach ($categories as $category)
                <option value="{{ $category['content'] }}">{{ $category['content'] }}</option>
                @endforeach
            </select>

            <div class="contact-form__error">
                @error('content')
                {{ $message }}
                @enderror
            </div>
            </input>
        </div>


        <div class=" contact-form__detail">
            <div class="contact-form__title">お問い合わせ内容<span>※</span></div>
            <div class="contact-form__detail">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
            </div>
            <div class="contact-form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>

    </form>
</div>





@endsection