@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>コンテンツ</p>
<p>controller　view<br>'message' = {{$message}}</p>
<p>ViewComposer value<br>'view_message'={{$view_message}}</p>
@endsection

@section('footer')
コピーらいと
@endsection