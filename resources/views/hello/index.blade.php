@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>コンテンツ</p>
<ul>
@each('components.item',$data,'item')
</ul>
@endsection

@section('footer')
コピーらいと
@endsection