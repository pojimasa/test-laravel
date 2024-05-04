@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-form__content">
    <div class="admin-form__heading">
      <div class="admin-form__content">
        <h2>Admin</h2>
        @if (isset($results))
            <h3>Search Results</h3>
            <ul>
                @foreach ($results as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form class="form" action="/admin" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <input class="create-form__item-input" type="text" name="content"  placeholder="名前やメールアドレスを入力してください">
        </div>
        <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
        <div class="form__group-content">
          <div class="form__input--text">
                <select id="gender" name="gender">
                    <option value="" disabled selected>性別</option>
                    <option value="option">男性</option>
                    <option value="option">女性</option>
                    <option value="option">その他</option>
                </select>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        </div>
        <div class="form__group">
        <div class="form__group-content">
          <div class="form__input--text">
                <select id="inquiry_type" name="inquiry_type">
                    <option value="" disabled selected>お問い合わせの種類</option>
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
        </div>
        <div class="form__group">
        <div class="form__group-content">
          <div class="form__input--text">
                <select id="inquiry_type" name="inquiry_type">
                    <option value="" disabled selected>年/月/日</option>
                    
                </select>
            </div>
            <div class="form__error">
                @error('inquiry_type')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        </div>
        <form class="form" action="{{ route('admin.search') }}" method="post">
          @csrf
        <div class="form__button">
          <button type="submit" class="form__button-submit">検索</button>
          <a class="form__button-submit2" href="">リセット</a>
        </div>
    </form>
</div>
@endsection