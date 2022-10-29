<!DOCTYPE html>
{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィールページ')


{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>プロフィールページ</title>
    </head>
    <body>
        <h1>Myニュース作成画面(プロフィールページ)</h1>
            <dt>
                <dd>テスト1</dd>
                <dd>テスト2</dd>
                <dd>テスト3</dd>
            </dt>
    </body>
</html>
@endsection