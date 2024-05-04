@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="last-name">
                <div class="form__input--text">
                    <label for="last-name"></label>
                    <input type="text" name="last-name" id="last-name" placeholder="例：山田" value="{{ old('name') }}"/>
                </div>
                <div class="form__input--text">
                    <label for="first-name"></label>
                    <input type="text" name="first-name" id="first-name" placeholder="例：太郎" />
                </div>
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

      <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--radio">
                <input type="radio" id="male" name="gender" value="{{ old('gender') }}">
                <label for="male">男性</label>
                <input type="radio" id="female" name="gender" value="{{ old('gender') }}">
                <label for="female">女性</label>
                <input type="radio" id="other" name="gender" value="{{ old('gender') }}">
                <label for="other">その他</label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
      </div>

        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
        </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com"value="{{ old('email') }}" />
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
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="tel-box">
              <input type="tel" name="tel-box1" placeholder="090" value="{{ old('tel') }}" /> -
              <input type="tel" name="tel-box2" placeholder="1234" value="{{ old('tel') }}" /> -
              <input type="tel" name="tel-box3" placeholder="5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
        </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
              @error('building')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">お問い合わせの種類</span>
              <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <select id="inquiry_type" name="inquiry_type">
                  <option value="" disabled selected>選択してください</option>
                  <option value="option">商品の交換について</option>
                  <option value="option">お問い合わせ</option>
                  <option value="option">その他</option>
                </select>
              </div>
              <div class="form__error">
                @error('inquiry_type')
                  {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご確認ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <a class="form__button-submit" href="/confirm">確認画面</a>
        </div>
      </form>
    </div>
@endsection
