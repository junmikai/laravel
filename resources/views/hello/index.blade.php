@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>コンテンツ</p>
<p><middleware>google.com</middleware>のリンク</p>
<p><middleware>yahoo.co.jp</middleware>のリンク</p>
@endsection

@section('footer')
コピーらいと
@endsection