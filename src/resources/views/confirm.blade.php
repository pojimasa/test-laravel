@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form__content">
    <div class="confirm-form__heading">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
      <div class="form__group">
        <div class="form__group-title">
          <table>
            <tr>
                <td>お名前</td>
                <td><input type="text" name="name" value="{{ $data['name'] ?? '' }}" readonly></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>{{ $data ['gender'] ?? ''}}</td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>{{ $data ['email'] ?? ''}}</td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>{{ $data ['tel'] ?? ''}}</td>
            </tr>
            <tr>
                <td>住所</td>
                <td>{{ $data ['address'] ?? ''}}</td>
            </tr>
            <tr>
                <td>建物名</td>
                <td>{{ $data ['building'] ?? ''}}</td>
            </tr>
            <tr>
                <td>お問い合わせの種類</td>
                <td>{{ $data ['inquiry_typ'] ?? ''}}</td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td>{{ $data ['content'] ?? ''}}</td>
            </tr>
          </table>
        </div>
      </div>
        <div class="form__button">
            <a class="form__button-submit" href="/thanks">送信</a>
            <a class="form__button-submit2" href="/">修正</a>
        </div>
    </form>
</div>
@endsection